//CODE TO RESIZE 2 ICONS INTO 3 

const boxOne = document.getElementById('first')
    const boxTwo = document.getElementById('second');
    const boxThree = document.getElementById('third');

    const firstThreeDivs = document.getElementById('threeDivs');
    const secondThreeDivs = document.getElementById('secondThreeDivs');

    function resizeWidth() {
      if (window.innerWidth > 920) {

        boxOne.style.display = "none";
        boxTwo.style.display = "none";
        boxThree.style.display = "none";

        firstThreeDivs.style.display = "flex";
        secondThreeDivs.style.display = "flex";

      }
      if (window.innerWidth < 920) {
        boxOne.style.display = "flex";
        boxTwo.style.display = "flex";
        boxThree.style.display = "flex";

        firstThreeDivs.style.display = "none";
        secondThreeDivs.style.display = "none";
      }

    }
    resizeWidth();

    window.addEventListener('resize', resizeWidth);

    const firstOffer = document.getElementById('firstTwoOfffers');
    const allThreeOffers = document.getElementById('allThreeOffers');

    function resizeOffers() {


      if (window.innerWidth > 1050) {
        firstOffer.classList.remove('firstTwoOfffers');
        allThreeOffers.class.add('allThreeOffers');
      }


    }

    window.addEventListener('resize', resizeOffers);

    //CODE FOR CHANGING MENU WITH X ICONS ON PHONE

    const menu = document.getElementById('togglerID');
    const xMenu = document.getElementById('xToggler');

    function changeMenuIcon() {
      xMenu.style.display = "block";
      menu.style.display = "none";
    }

    function changeXIcon () {
      xMenu.style.display = "none";
      menu.style.display = "block";
    }
