async function spin() {
  wheel.play();
  const box = document.getElementById("box");
  const element = document.getElementById("mainbox");
  let SelectedItem = "";
  
  // Make an API request to fetch the taux value from the server
  const response = await fetch("/getTaux");
  const data = await response.json();
  const taux = data.taux;

  // Calculate the results based on the taux value
  let AC = shuffle([1890, 2250, 2610].map(val => val * taux));
  let Camera = shuffle([1850, 2210, 2570].map(val => val * taux));
  let Zonk = shuffle([1770, 2130, 2490]);
  let PS = shuffle([1810, 2170, 2530].map(val => val * taux));
  let Headset = shuffle([1750, 2110, 2470]);
  let Drone = shuffle([1630, 1990, 2350].map(val => val * taux));
  let ROG = shuffle([1570, 1930, 2290].map(val => val * taux));
  let results = shuffle([
    AC[0],
    Camera[0],
    Zonk[0],
    PS[0],
    Headset[0],
    Drone[0],
    ROG[0],
  ]);

  // Determine the selected item based on the results
  if (AC.includes(results[0])) SelectedItem = "Air Conditioner ";
  if (Camera.includes(results[0])) SelectedItem = "Camera sport Action ";
  if (Zonk.includes(results[0])) SelectedItem = "💥";
  if (PS.includes(results[0])) SelectedItem = "playstation 4 slim ";
  if (Headset.includes(results[0])) SelectedItem = "porte-clés";
  if (Drone.includes(results[0])) SelectedItem = "Drone Mini ";
  if (ROG.includes(results[0])) SelectedItem = "lavage";

  // Update the style of the box to animate the rotation
  box.style.setProperty("transition", "all ease 5s");
  box.style.transform = "rotate(" + results[0] + "deg)";
  element.classList.remove("animate");

  // Show the result after 5.5 seconds
  setTimeout(function () {
    element.classList.add("animate");
    applause.play();
    Swal.fire({
      title: "Hello",
      html:
        "i win " +
        SelectedItem +
        " | " +
        '<a href="#"style="text-decoration:none;color:blue" > claim Now </a>',
      imageUrl: "./assets/Logo.png",
      imageWidth: 200,
      imageHeight: 200,
      imageAlt: "Custom image",
    });
  }, 5000);

  // Reset the style of the box after 6 seconds
  setTimeout(function () {
    box.style.setProperty("transition", "initial");
    box.style.transform = "rotate(90deg)";
  }, 6000);
}
