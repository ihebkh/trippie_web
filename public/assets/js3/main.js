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
      resultBox.innerHTML = `You won ${value}!`;
  
      // You can use the SweetAlert2 library to display a nice modal instead of the plain alert
      Swal.fire({
        icon: "success",
        title: "Congratulations!",
        text: `You won ${value}!`,
        confirmButtonText: "Play again",
      }).then((result) => {
        if (result.isConfirmed) {
          spin();
        }
      });
  
    }, 5000);
    
  }
  