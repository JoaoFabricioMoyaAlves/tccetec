const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const imagem = document.querySelector("#minhaImagem");
const pictureImageTxt = "Choose an image";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];



  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;
      
     // const img = document.createElement("img");
     // img.src = readerTarget.result;
    //  img.classList.add("picture__img");
      
    //  pictureImage.innerHTML = "";
     // pictureImage.appendChild(img);
      imagem.src = readerTarget.result;
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});
