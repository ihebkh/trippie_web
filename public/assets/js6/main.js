let spinCount = 0;
let sections = [];

function spin() {
  if (spinCount >= 3) {
    alert("Sorry, you have the right to play only 3 times.");
    return;
  }

  spinCount++;

  const box = document.getElementById("box");
  const degrees = 360 * 3; // Spin 3 full rotations
  const audio = document.getElementById("wheel");

  audio.play();
  box.style.transition = "all 5s ease-in-out";
  box.style.transform = `rotate(${degrees}deg)`;

  setTimeout(() => {
    audio.pause();
    audio.currentTime = 0;
    box.style.transition = "initial";
    box.style.transform = "rotate(90deg)";

    const resultBox = document.getElementById("result");
    const sections = document.querySelectorAll(".box .font");
    const index = Math.floor(Math.random() * sections.length);
    const section = sections[index];
    const value = section.textContent;

    fetch(`/coupon/code_coupon/${value}`)
      .then((response) => response.text())
      .then((code_coupon) => {
        // show alert with coupon code
        Swal.fire({
          icon: "success",
          title: "Congratulations!",
          html: ` Your coupon code is: <strong>${code_coupon}  Click <a href="/qrcode/"  return false;">here</a> to generate your QR code.</strong>.`,
          confirmButtonText: "Play again",
          showCancelButton: true,
        }).then((result) => {
          if (result.isConfirmed) {
            spin();
          }
        });
      })
      .catch((error) => console.log(error));
  }, 5000);
}

function generateQRCode(code) {
  fetch(`/qrcode/generate/${code}`)
    .then((response) => response.text())
    .then((dataUri) => {
      // show QR code in a popup
      Swal.fire({
        title: "QR Code",
        html: `<img src="${dataUri}" alt="QR code"/>`,
        confirmButtonText: "Close",
      });
    })
    .catch((error) => console.log(error));
}
