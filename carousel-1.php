<div class="container">
    <div class="background-image"></div>
    <div class="text-container">
        <h1 class="changing-text">Welcome to My Website</h1>
    </div>
    <div class="image-container">
        <img src="image-carousel/image-carousel-1/stole.png" alt="">
        <img src="image-carousel/image-carousel-1/361565224_1314143106189835_5392605077248901451_n.jpg" alt="">
        <img src="image-carousel/image-carousel-1/FB_IMG_1670486478002.jpg" alt="">
        <img src="image-carousel/image-carousel-1/361637374_1314143116189834_4413539687167115761_n.jpg" alt="">
    </div>
</div>


<script>
    const backgroundElement = document.querySelector('.background-image');
const changingTextElement = document.querySelector('.changing-text');
const carouselImages = document.querySelectorAll('.image-container img');

const carouselData = [
    {
        image: 'image-carousel/image-carousel-1/stole.png',
        text: 'Welcome to My Website',
    },
    {
        image: 'image-carousel/image-carousel-1/361565224_1314143106189835_5392605077248901451_n.jpg',
        text: 'Explore the Beauty of Nature',
    },
    {
        image: 'image-carousel/image-carousel-1/FB_IMG_1670486478002.jpg',
        text: 'Discover the Urban Life',
    },
    {
        image: 'image-carousel/image-carousel-1/361637374_1314143116189834_4413539687167115761_n.jpg',
        text: 'Adventure Awaits in the Mountains',
    },
];

function changeCarousel(index) {
    const carouselItem = carouselData[index];
    backgroundElement.style.backgroundImage = `url('${carouselItem.image}')`;
    changingTextElement.textContent = carouselItem.text;

    carouselImages.forEach(image => {
        image.classList.remove('active');
    });

    carouselImages[index].classList.add('active');
}

let currentIndex = 0;
changeCarousel(currentIndex);

function animateCarousel() {
    currentIndex = (currentIndex + 1) % carouselData.length;
    changeCarousel(currentIndex);
}

setInterval(animateCarousel, 5000);

</script>