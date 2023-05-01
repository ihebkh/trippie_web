<?php

namespace App\Controller;
use App\Entity\Coupon;
use App\Entity\Cadeau;
use App\Repository\CouponRepository;
use App\Repository\CadeauRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\Mailer\MailerInterface;
class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    

    #[Route('/home/roue', name: 'app_roue')]
    public function index2(CouponRepository $couponRepository): Response
    {
        // Get the taux and type values from the database
        $coupons = $couponRepository->findAll();
        $taux = [];
        $type=[];

        
        foreach ($coupons as $coupon) {
           $taux[] = $coupon->getTaux();
           $type[]=$coupon->getType(); 
        }
        shuffle($taux); // shuffle the array to randomize the order
       
        // Pass the taux and type values to the Twig template
        return $this->render('home/indexroue.html.twig', [
            'taux' => $taux,
            'type'=>$type,
            
        ]);
    }
    
    #[Route('/coupon/code_coupon/{taux}', name: 'app_code_coupon')]
    public function getCodeCouponByTaux(CouponRepository $couponRepository, $taux): Response
    {
        $coupon = $couponRepository->findOneBy(['taux' => $taux]);
    
        if (!$coupon) {
            throw $this->createNotFoundException('Coupon code not found');
        }
    
        return new Response($coupon->getCodeCoupon());
    }
    

    #[Route('/home/about', name: 'appllycoupon')]
public function appllycoupon (CouponRepository $couponRepository,Request $request ):Response
{
    $form = $this->createFormBuilder()
    ->add('price', TextType::class, [
        'attr' => [
            'class' => 'form-control mb-3',
            'placeholder' => 'Price',
        ],
    ])
    ->add('code_coupon', TextType::class, [
        'attr' => [
            'class' => 'form-control mb-3',
            'placeholder' => 'Coupon code',
        ],
    ])
    ->add('submit', SubmitType::class, [
        'attr' => [
            'class' => 'btn btn-primary',
        ],
        'label' => 'Submit',
    ])
    ->getForm();
    $price=0;
    $newPrice=0;

    if ($request->isMethod('POST'))
    {
    $form->handleRequest($request);
    
     if ($form->isSubmitted() && $form->isValid()) {
     $data=$form->getData();
     $discount=$this->getDoctrine()->getRepository(coupon::class);

     $coupon = $discount->findOneByCodeCoupon(['code_coupon'=>$data['code_coupon']]); 
    if ($coupon){
    $price =$data['price'];
    if ($coupon->getNbrUtilisation() > 0) {
        $coupon->setNbrUtilisation($coupon->getNbrUtilisation() - 1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($coupon);
        $entityManager->flush();
        if ($coupon->getNbrUtilisation() == 0) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($coupon);
            $entityManager->flush();
        }
    }
    
    $discountedPrice=$coupon->getTaux()*$price/100;

    $newPrice=$price-$discountedPrice;


return $this->render('home/discount.html.twig',[
'price'=>$price,
'newPrice'=>$newPrice,
'form'=>$form->createView(),

]);
    
}}
    } 
    return $this->render('home/discount.html.twig', [
        'form' => $form->createView(),
        'price'=>$price,
        'newPrice'=>$newPrice,
      
        
    ]);   
     
}
#[Route('/home/Services', name: 'GIFT')]

public function gift(CadeauRepository $cadeauRepository): Response
{
    $cadeaux = $cadeauRepository->findAll();

    return $this->render('home/gift.html.twig', [
        'cadeaux' => $cadeaux,
    ]);
}    
#[Route('/home/Services/{idcadeau<\d+>}', name: 'gift')]   
public function sendEmail(Request $request, int $idcadeau, CadeauRepository $cadeauRepository, MailerInterface $mailer): Response
{
    $cadeau = $cadeauRepository->find($idcadeau);

    // create the email
    $email = (new Email())
                ->from('symfonycopte822@gmail.com')
                ->to('rim.mdimagh@esprit.tn')
                ->subject('Car Rental Reservation Confirmation')
                ->text('Dear user,


As a reminder, please bring a valid driver\'s license and a credit card in your name when you come to pick up the car. If you have any additional questions or special requests, please do not hesitate to contact us.

We look forward to serving you and hope you have a safe and enjoyable rental experience with us.

Best regards,
Trippie');
            $transport = new GmailSmtpTransport('symfonycopte822@gmail.com', 'cdwgdrevbdoupxhn');
            $mailer = new Mailer($transport);
            $mailer->send($email);
            return $this->redirectToRoute('GIFT');



    
}

}