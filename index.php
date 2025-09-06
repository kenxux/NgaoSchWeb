<?php
include 'connection/database.php';

// Default content for when database is not available
$defaultContent = [
    'one' => 'Shree Pashupati Technical Secondary School is a leading educational institution dedicated to providing quality technical education. Our school focuses on developing skilled professionals who can contribute meaningfully to society.',
    'two' => 'At Pashupati, we believe in excellence, innovation, and practical learning. Our modern facilities, experienced faculty, and industry-oriented curriculum make us the preferred choice for technical education.',
    'three' => 'Our faculty consists of highly qualified and experienced teachers who are experts in their respective fields.',
    'four' => 'We provide a peaceful and conducive learning environment that helps students focus on their studies.',
    'five' => 'We embrace modern technology and digital learning tools to enhance the educational experience.',
    'six' => 'We provide state-of-the-art facilities and resources that support comprehensive learning and development.',
    'seven' => 'Our students consistently praise the supportive learning environment, quality education, and career guidance they receive at our institution.',
    'eight' => 'Our Computer Engineering program combines theoretical knowledge with practical skills, preparing students for successful careers in technology and engineering fields.'
];

$defaultFlashNotice = [
    'notice' => 'Welcome to our school website! Check out our latest updates and announcements.',
    'trun_flash' => '0'
];

try {
    if ($connection) {
        $query = "SELECT * FROM web_content WHERE id = 1";
        $flash_query = "SELECT * FROM flash_notice WHERE id = 1";

        $result = mysqli_query($connection, $query);
        $flash_result = mysqli_query($connection, $flash_query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            $row = $defaultContent;
        }

        if ($flash_result && mysqli_num_rows($flash_result) > 0) {
            $flash_notice = mysqli_fetch_assoc($flash_result);
        } else {
            $flash_notice = $defaultFlashNotice;
        }

        mysqli_close($connection);
    } else {
        // Use default content when database is not available
        $row = $defaultContent;
        $flash_notice = $defaultFlashNotice;
    }
} catch (Exception $e) {
    // Use default content on any error
    $row = $defaultContent;
    $flash_notice = $defaultFlashNotice;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="icon" type="image/x-icon" href="assects/images/logo2.png">
    <link rel="stylesheet" href="css/animation.css">
    <style>

    </style>
</head>

<body>
   
<?php include('includes/header.php') ?>



    <!-- Enhanced Carousel Section -->
    <div class="enhanced-carousel mx-auto">
        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="carousel-item hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="carousel-overlay">
                        <div class="carousel-text">Welcome to Pashupati</div>
                    </div>
                    <img src="assects/images/schoolImages/fullschool.jpg"
                        class="object-cover block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2"
                        alt="Full School View">
                </div>
                <!-- Item 2 -->
                <div class="carousel-item hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="carousel-overlay">
                        <div class="carousel-text">Excellence in Education</div>
                    </div>
                    <img src="assects/images/schoolImages/mainschool.jpg"
                        class="object-cover block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2"
                        alt="Main School Building">
                </div>
                <!-- Item 3 -->
                <div class="carousel-item hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="carousel-overlay">
                        <div class="carousel-text">Technical Excellence</div>
                    </div>
                    <img src="assects/images/schoolImages/engineeringschool.jpg"
                        class="object-cover block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2"
                        alt="Engineering School">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50 transition-all">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50 transition-all">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    <!-- Enhanced Content Sections -->
    <div class="fade-in-up">
        <h1 class="section-title">
            Shree Pashupati Technical Secondary School
        </h1>
        <p class="section-description">
            <?php echo $row['one']; ?>
        </p>

        <h1 class="section-title">
            Why Choose Pashupati?
        </h1>
        <p class="section-description">
            <?php echo $row['two']; ?>
        </p>
    </div>

    <!-- Enhanced Features Section -->
    <div class="features-container">
        <div class="features-grid">
            <div class="feature-card fade-in-up">
                <div class="feature-icon">
                    <svg class="w-full h-full" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </div>
                <h3 class="feature-title">Highly Qualified Teachers</h3>
                <p class="feature-description"><?php echo $row['three']; ?></p>
            </div>

            <div class="feature-card fade-in-up" style="animation-delay: 0.1s;">
                <div class="feature-icon">
                    <svg class="w-full h-full" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="feature-title">Peaceful Environment</h3>
                <p class="feature-description"><?php echo $row['four']; ?></p>
            </div>

            <div class="feature-card fade-in-up" style="animation-delay: 0.2s;">
                <div class="feature-icon">
                    <svg class="w-full h-full" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="feature-title">Digital Learning</h3>
                <p class="feature-description"><?php echo $row['five']; ?></p>
            </div>

            <div class="feature-card fade-in-up" style="animation-delay: 0.3s;">
                <div class="feature-icon">
                    <svg class="w-full h-full" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                        </path>
                    </svg>
                </div>
                <h3 class="feature-title">Facilitated Development Environment</h3>
                <p class="feature-description"><?php echo isset($row['six']) ? $row['six'] : 'We provide state-of-the-art facilities and resources that support comprehensive learning and development.'; ?></p>
            </div>
        </div>
    </div>

    <!-- Additional Content Sections -->
    <div class="fade-in-up">
        <h1 class="section-title">
            What Students Say About Us
        </h1>
        <p class="section-description">
            <?php echo $row['seven']; ?>
        </p>

        <h1 class="section-title">
            Computer Engineering Program
        </h1>
        <p class="section-description">
            <?php echo $row['eight']; ?>
        </p>
    </div>

    <?php include('includes/footer.php') ?>


    

<?php 
if($flash_notice['trun_flash'] == "1"){
echo '
<div id="info-popup" tabindex="-1" class="fadeIn hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
            <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">'. $flash_notice['title'] .'</h3>
                <img class="object-cover w-full rounded-lg" src="'. $flash_notice['image_url'] .'" alt="">
                <p class="mt-3 font-bold">
                    '. $flash_notice['message'] . '
                </p>
            </div>
            <div class="justify-between items-center pt-0 space-y-4 sm:flex sm:space-y-0">
                <a href="aboutus.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">See About School</a>
                <div class="items-center space-y-4 sm:space-x-4 sm:flex sm:space-y-0">                  
                    <button id="close-modal" type="button" class="py-2 px-4 w-full text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
';
}
?>
</body>
<script>
const modalEl = document.getElementById('info-popup');
const privacyModal = new Modal(modalEl, {
    placement: 'center'
});

privacyModal.show();

const closeModalEl = document.getElementById('close-modal');
closeModalEl.addEventListener('click', function() {
    privacyModal.hide();
});

setInterval(updatecarsoul, 5000);

function updatecarsoul() {
    document.getElementsByClassName('nextimage')[0].click();
}
//console.clear();
</script>

</html>