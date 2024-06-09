<?php require "conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDE GROUP</title>

    <?php include "link.html" ?>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/genre.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/get-ticket.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php include "navbar.php" ?>

    <div class="video">
        <video loop autoplay preload="auto" muted>
            <source src="img/video.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <h1 class="text-heading font1 m-0"><span style="color: var(--yellow);">CELEBRATING</span> MUSIC, ART, AND CULTURE</h1>
            <br>
            <div class="para-container">
                <p class="text-para">Join us for an unforgettable experience where world-class performances and diverse cultural expressions come together. Secure your tickets now and be part of the celebration!</p>
            </div>

            <div class="btn-landing-cont py-3">
                <a href="#calendar"><button class="btn-landing text-para">EVENTS CALENDAR</button></a>
                <a href="tickets.php"><button class="btn-landing btn-landing2 text-para">TICKETS</button></a>
            </div>

        </div>
    </div>

    <div class="row bar text">
        <div class="slider slider2 p-1">
            <div class="slider-track slider-track2 font3">
                <span class="text-heading3"><svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--black)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--black)"></path>
                        </g>
                    </svg><b>CREATING UNFORGETTABLE MEMORIES</b><svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--black)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--black)"></path>
                        </g>
                    </svg></span>
                <span class="text-heading3"><svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--black)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--black)"></path>
                        </g>
                    </svg><b>CREATING UNFORGETTABLE MEMORIES</b><svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--black)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--black)"></path>
                        </g>
                    </svg></span>
                <span class="text-heading3"><svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--black)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--black)"></path>
                        </g>
                    </svg><b>CREATING UNFORGETTABLE MEMORIES</b><svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--black)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--black)"></path>
                        </g>
                    </svg></span>
            </div>
        </div>
    </div>

    <section class="genre d-flex justify-content-center flex-column">
        <h1 class="font1 text-heading2">FAVORITE GENRE</h1>
        <div class="d-flex flex-column">
            <div class="row mt-1 mt-xl-4 gy-4">
                <div class="col-12 col-sm-6 col-xl-4 perlu-hide">
                    <div id="pop-genre" class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                        <h1 class="text-heading3 m-0"><b>POP</b></h1>
                        <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g id="arrow-up-right">
                                        <g>
                                            <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                            <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 perlu-hide">
                    <div id="rock-genre" class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                        <h1 class="text-heading3 m-0"><b>ROCK</b></h1>
                        <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g id="arrow-up-right">
                                        <g>
                                            <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                            <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 perlu-hide">
                    <div id="jazz-genre" class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                        <h1 class="text-heading3 m-0"><b>JAZZ</b></h1>
                        <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g id="arrow-up-right">
                                        <g>
                                            <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                            <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 perlu-hide">
                    <div id="hiphop-genre" class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                        <h1 class="text-heading3 m-0"><b>HIPHOP</b></h1>
                        <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g id="arrow-up-right">
                                        <g>
                                            <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                            <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 perlu-hide">
                    <div id="kpop-genre" class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                        <h1 class="text-heading3 m-0"><b>K-POP</b></h1>
                        <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g id="arrow-up-right">
                                        <g>
                                            <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                            <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 perlu-hide">
                    <div id="funk-genre" class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                        <h1 class="text-heading3 m-0"><b>FUNK</b></h1>
                        <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g id="arrow-up-right">
                                        <g>
                                            <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                            <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="detail-genre d-flex gap-4 mt-1 mt-xl-4">
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="events d-flex justify-content-center flex-column" id="ticket">
        <h1 class="font1 text-heading2">CONCERT OF THE MONTH</h1>
        <div class="d-flex flex-column">
            <div class="row mt-1 mt-xl-4">
                <div class="col-12 col-lg-6 my-4">
                    <div class="box-events">
                        <img src="img/taylor.jpeg" alt="" class="event-poster">
                        <div class="px-lg-3 py-4 py-lg-0 d-flex justify-content-between flex-column">
                            <div>
                                <h1 class="font3 text-heading3"><b>The Eras Tour</b></h1>
                                <p class="text-para2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto incidunt officiis dolore!</p>
                                <p class="text-para2">May 14-15, 2023 01:00 - 05:00 PM Jakarta, Indonesia</p>
                            </div>
                            <div class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                                <h1 class="text-para m-0"><b>BUY TICKET</b></h1>
                                <svg class="arrow-svg2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g id="Complete">
                                            <g id="arrow-up-right">
                                                <g>
                                                    <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                                    <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 my-4">
                    <div class="box-events">
                        <img src="img/taylor.jpeg" alt="" class="event-poster">
                        <div class="px-lg-3 py-4 py-lg-0 d-flex justify-content-between flex-column">
                            <div>
                                <h1 class="font3 text-heading3"><b>The Eras Tour</b></h1>
                                <p class="text-para2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto incidunt officiis dolore!</p>
                                <p class="text-para2">May 14-15, 2023 01:00 - 05:00 PM Jakarta, Indonesia</p>
                            </div>
                            <div class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                                <h1 class="text-para m-0"><b>BUY TICKET</b></h1>
                                <svg class="arrow-svg2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g id="Complete">
                                            <g id="arrow-up-right">
                                                <g>
                                                    <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                                    <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 my-4">
                    <div class="box-events">
                        <img src="img/taylor.jpeg" alt="" class="event-poster">
                        <div class="px-lg-3 py-4 py-lg-0 d-flex justify-content-between flex-column">
                            <div>
                                <h1 class="font3 text-heading3"><b>The Eras Tour</b></h1>
                                <p class="text-para2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto incidunt officiis dolore!</p>
                                <p class="text-para2">May 14-15, 2023 01:00 - 05:00 PM Jakarta, Indonesia</p>
                            </div>
                            <div class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                                <h1 class="text-para m-0"><b>BUY TICKET</b></h1>
                                <svg class="arrow-svg2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g id="Complete">
                                            <g id="arrow-up-right">
                                                <g>
                                                    <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                                    <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 my-4">
                    <div class="box-events">
                        <img src="img/taylor.jpeg" alt="" class="event-poster">
                        <div class="px-lg-3 py-4 py-lg-0 d-flex justify-content-between flex-column">
                            <div>
                                <h1 class="font3 text-heading3"><b>The Eras Tour</b></h1>
                                <p class="text-para2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto incidunt officiis dolore!</p>
                                <p class="text-para2">May 14-15, 2023 01:00 - 05:00 PM Jakarta, Indonesia</p>
                            </div>
                            <div class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                                <h1 class="text-para m-0"><b>BUY TICKET</b></h1>
                                <svg class="arrow-svg2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g id="Complete">
                                            <g id="arrow-up-right">
                                                <g>
                                                    <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                                    <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="events d-flex justify-content-center flex-column" id="calendar">
        <h1 class="font1 text-heading2">CALENDAR</h1>
        <div class="d-flex flex-column">
            <div class="row mt-4 text-center">
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-1" onclick="showOutput(1)">Jan</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-2" onclick="showOutput(2)">Feb</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-3" onclick="showOutput(3)">Mar</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-4" onclick="showOutput(4)">Apr</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-5" onclick="showOutput(5)">May</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-6" onclick="showOutput(6)">Jun</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-7" onclick="showOutput(7)">Jul</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-8" onclick="showOutput(8)">Aug</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-9" onclick="showOutput(9)">Sep</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-10" onclick="showOutput(10)">Oct</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-11" onclick="showOutput(11)">Nov</p>
                </div>
                <div class="col-2 col-lg-1">
                    <p class="text-para month" id="month-12" onclick="showOutput(12)">Dec</p>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="d-flex flex-column">
            <div class="row mt-4" id="output">
                <div class="col-12 my-2 my-lg-0">
                    <div class="block-event d-flex justify-content-center align-items-center p-2">
                        <h1 class="text-para m-0 text-center" style="color: var(--yellow);"><b>CLICK ONE OF THE MONTHS TO SEE THE UPCOMING EVENTS!</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-ticket d-flex justify-content-center flex-column">
        <div class="d-flex flex-column">
            <div class="row mt-4 g-4">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                    <h1 class="font1 text-heading2">GRAB YOUR <span style="color: var(--yellow);">TICKET</span> NOW!</h1>
                    <div class="line2"></div>
                    <div class="d-flex flex-column justify-content-between">
                        <p class="text-para mt-4">Don't miss out on an incredible day of live music. Get your tickets today and immerse yourself in this vibrant celebration!</p>
                        <a href="tickets.php" style="text-decoration: none; color: inherit;">
                            <div class="box-genre d-flex justify-content-between align-items-center px-4 py-3">
                                <h1 class="text-heading3 m-0"><b>BUY TICKET</b></h1>
                                <svg class="arrow-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff154">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g id="Complete">
                                            <g id="arrow-up-right">
                                                <g>
                                                    <polyline class="arrow" data-name="Right" fill="none" id="Right-2" points="18.7 12.4 18.7 5.3 11.6 5.3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"></polyline>
                                                    <line class="polyline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5.3" x2="17.1" y1="18.7" y2="6.9"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-end">
                    <img src="img/concert.webp" alt="" class="img-ticket">
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script>
        $(document).ready(function() {
            $(".homeNavbar").addClass("active disabled");
            $(".homeNavbar1").prepend('<svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--cream)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--cream)"></path> </g></svg> ');

            $('#pop-genre').on('click', function() {
                $(".perlu-hide").addClass('hidden');
                $('.detail-genre').html(`
                     <div class="img-genre">
                        <img src="img/pop.webp" alt="" class="img-fluid">
                    </div>
                    <div class="text-content">
                        <h1 class="text-heading3"><b>POP MUSIC</b></h1>

                        <p class="text-para2">Pop music is a genre of popular music that originated in its modern form during the mid-1950s in the United States and the United Kingdom. During the 1950s and 1960s, pop music encompassed rock and roll and the youth-oriented styles it influenced. Rock and pop music remained roughly synonymous until the late 1960s, after which pop became associated with music that was more commercial, ephemeral, and accessible.
                        </p>
                        <p class="text-para2">
                            Identifying factors of pop music usually include repeated choruses and hooks, short to medium-length songs written in a basic format (often the verse–chorus structure), and rhythms or tempos that can be easily danced to. Much of pop music also borrows elements from other styles such as rock, urban, dance, Latin, and country.
                        </p>
                        <p class="text-para2">
                            The terms popular music and pop music are often used interchangeably, although the former more accurately describes all music that is popular and includes many disparate styles. Although much of the music that appears on record charts is considered to be pop music, the genre is distinguished from chart music.
                        </p>
                        <button class="btn btn-secondary btn-back px-4 text-para2">Back</button>
                    </div>
                `);
            });

            $('#rock-genre').on('click', function() {
                $(".perlu-hide").addClass('hidden');
                $('.detail-genre').html(`
                <div class="img-genre">    
                <img src="img/rock.avif" alt="" class=""img-fluid>
                      </div>
                    <div class="text-content">
                        <h1 class="text-heading3"><b>ROCK MUSIC</b></h1>

                        <p class="text-para2">
                        Rock is a broad genre of popular music that originated as "rock and roll" in the United States in the late 1940s and early 1950s, developing into a range of different styles from the mid-1960s, particularly in the United States and the United Kingdom. It has its roots in 1940s and 1950s rock and roll, a style that drew directly from the blues and rhythm and blues genres of African-American music and from country music. Rock also drew strongly from genres such as electric blues and folk, and incorporated influences from jazz and other musical styles. For instrumentation, rock has centered on the electric guitar, usually as part of a rock group with electric bass guitar, drums, and one or more singers. Usually, rock is song-based music with a 4
4                       time signature using a verse–chorus form, but the genre has become extremely diverse. Like pop music, lyrics often stress romantic love but also address a wide variety of other themes that are frequently social or political. Rock was the most popular genre of music in the U.S. and much of the Western world from the 1950s to the 2010s.
                        </p>
                        <button class="btn btn-secondary btn-back px-4 text-para2">Back</button>
                    </div>  
                `);
            });

            $('#jazz-genre').on('click', function() {
                $(".perlu-hide").addClass('hidden');
                $('.detail-genre').html(`
                <div class="img-genre">    
                <img src="img/jazz.jpg" alt="" class=""img-fluid>
                      </div>
                    <div class="text-content">
                        <h1 class="text-heading3"><b>JAZZ MUSIC</b></h1>

                        <p class="text-para2">
                       Jazz is a music genre that originated in the African-American communities of New Orleans, Louisiana, in the late 19th and early 20th centuries, with its roots in blues, ragtime, European harmony and African rhythmic rituals. Since the 1920s Jazz Age, it has been recognized as a major form of musical expression in traditional and popular music. Jazz is characterized by swing and blue notes, complex chords, call and response vocals, polyrhythms and improvisation.
                       </p>

                       <p class="text-para2">
                       As jazz spread around the world, it drew on national, regional, and local musical cultures, which gave rise to different styles. New Orleans jazz began in the early 1910s, combining earlier brass band marches, French quadrilles, biguine, ragtime and blues with collective polyphonic improvisation. However, jazz did not begin as a single musical tradition in New Orleans or elsewhere. In the 1930s, arranged dance-oriented swing big bands, Kansas City jazz (a hard-swinging, bluesy, improvisational style), and gypsy jazz (a style that emphasized musette waltzes) were the prominent styles.
                       </p>
                        <button class="btn btn-secondary btn-back px-4 text-para2">Back</button>
                    </div>  
                `);
            });

            $('#hiphop-genre').on('click', function() {
                $(".perlu-hide").addClass('hidden');
                $('.detail-genre').html(`
                <div class="img-genre">    
                <img src="img/hiphop.jpg" alt="" class=""img-fluid>
                      </div>
                    <div class="text-content">
                        <h1 class="text-heading3"><b>HIPHOP MUSIC</b></h1>

                        <p class="text-para2">
                        Hip-hop, or hip-hop music, also known as rap and formerly as disco rap, is a genre of popular music that originated in the early 1970s from African Americans and Afro-Caribbean immigrants in the Bronx, a borough of New York City. Hip-hop music originated as an anti-drug and anti-violence genre consisting of stylized rhythmic music (usually built around drum beats) that often accompanies rapping, a rhythmic delivery of poetic speech. In the early 1990s, a professor of African American studies at Temple University said, "Hip hop is something that blacks can unequivocally claim as their own." By the 21st century, the field of rappers had diversified by both race and gender. The music developed as part of the broader hip-hop culture, a subculture defined by four key stylistic elements: MCing/rapping, DJing/scratching with turntables, breakdancing, and graffiti art. While often used to refer solely to rapping and rap music, "hip hop" more properly denotes the practice of the entire subculture. The term hip hop music is sometimes used synonymously with the term rap music, though rapping is not a required component of hip hop music; the genre may also incorporate other elements of the culture, including DJing, turntablism, scratching, beatboxing, and instrumental tracks.
                        </p>
                        <button class="btn btn-secondary btn-back px-4 text-para2">Back</button>
                    </div>  
                `);
            });

            $('#kpop-genre').on('click', function() {
                $(".perlu-hide").addClass('hidden');
                $('.detail-genre').html(`
                <div class="img-genre">    
                <img src="img/kpop.jpg" alt="" class=""img-fluid>
                      </div>
                    <div class="text-content">
                        <h1 class="text-heading3"><b>K-POP MUSIC</b></h1>

                        <p class="text-para2">
                        K-pop (Korean: 케이팝; RR: keipap), short for Korean popular music, is a form of popular music originating in South Korea as part of South Korean culture. It includes styles and genres from around the world, such as pop, hip hop, R&B, rock, jazz, gospel, reggae, electronic dance, folk, country, disco, and classical on top of its traditional Korean music roots. The term "K-pop" became popular in the 2000s, especially in the international context. The Korean term for domestic pop music is gayo (가요; 歌謠), which is still widely used within South Korea. While "K-pop" can refer to all popular music or pop music from South Korea, it is colloquially often used in a narrower sense for any Korean music and artists associated with the entertainment and idol industry in the country, regardless of the genre.
                       </p>

                        <p class="text-para2">
                        The more modern form of the genre, originally termed "rap dance", emerged with the formation of the hip hop boy band Seo Taiji and Boys, in 1992. Their experimentation with different styles and genres of music and integration of foreign musical elements helped reshape and modernize South Korea's contemporary music scene.
                       </p>
                        <button class="btn btn-secondary btn-back px-4 text-para2">Back</button>
                    </div>  
                `);
            });

            $('#funk-genre').on('click', function() {
                $(".perlu-hide").addClass('hidden');
                $('.detail-genre').html(`
                <div class="img-genre">    
                <img src="img/funk.jpg" alt="" class=""img-fluid>
                      </div>
                    <div class="text-content">
                        <h1 class="text-heading3"><b>FUNK MUSIC</b></h1>

                        <p class="text-para2">
                        Funk is a music genre that originated in African-American communities in the mid-1960s when musicians created a rhythmic, danceable new form of music through a mixture of various music genres that were popular among African-Americans in the mid-20th century. It deemphasizes melody and chord progressions and focuses on a strong rhythmic groove of a bassline played by an electric bassist and a drum part played by a percussionist, often at slower tempos than other popular music. Funk typically consists of a complex percussive groove with rhythm instruments playing interlocking grooves that create a "hypnotic" and "danceable" feel. It uses the same richly colored extended chords found in bebop jazz, such as minor chords with added sevenths and elevenths, and dominant seventh chords with altered ninths and thirteenths.
                        </p>
                        <button class="btn btn-secondary btn-back px-4 text-para2">Back</button>
                    </div>  
                `);
            });

            $(document).on('click', '.btn-back', function() {
                $(".perlu-hide").removeClass('hidden');
                $('.detail-genre').html(``);
            });
        });
    </script>

    <script>
        var copyBar2 = document.querySelector(".slider-track2").cloneNode(true);
        document.querySelector(".slider2").appendChild(copyBar2);
    </script>

    <script>
        function showOutput(month) {
            var outputElement = document.getElementById('output');
            outputElement.innerHTML = "";

            var months = document.getElementsByClassName('month');
            for (var i = 0; i < months.length; i++) {
                months[i].classList.remove('month-active');
            }

            var clickedMonth = document.getElementById('month-' + month);
            clickedMonth.classList.add('month-active');

            switch (month) {
                case 1:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">13-14</h1>
                                    <h1 class="text-para m-0">JAN</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">NCT 127</h1>
                                    <h1 class="text-para m-0"><b>NEO CITY - THE UNITY</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">16</h1>
                                    <h1 class="text-para m-0">JAN</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">YOASOBI</h1>
                                    <h1 class="text-para m-0"><b>LIVE IN JAKARTA</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">24</h1>
                                    <h1 class="text-para m-0">JAN</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">LOUIS TOMLINSON</h1>
                                    <h1 class="text-para m-0"><b>FAITH IN THE FUTURE</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 2:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">1-25</h1>
                                    <h1 class="text-para m-0">FEB</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">TULUS</h1>
                                    <h1 class="text-para m-0"><b>TUR MANUSIA</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">24</h1>
                                    <h1 class="text-para m-0">FEB</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">JONAS BROTHER</h1>
                                    <h1 class="text-para m-0"><b>THE TOUR</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 3:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">2</h1>
                                    <h1 class="text-para m-0">MAR</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">ED SHEERAN</h1>
                                    <h1 class="text-para m-0"><b>MATHEMATICS TOUR</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">1-3</h1>
                                    <h1 class="text-para m-0">MAR</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">JOYLAND</h1>
                                    <h1 class="text-para m-0"><b>JOYLAND FESTIVAL BALI</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 4:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">24</h1>
                                    <h1 class="text-para m-0">APR</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">INCUBUS</h1>
                                    <h1 class="text-para m-0"><b>ASIA TOUR 2024</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">27</h1>
                                    <h1 class="text-para m-0">APR</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">YIRUMA</h1>
                                    <h1 class="text-para m-0"><b>WORLD TOUR LIVE</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">27-28</h1>
                                    <h1 class="text-para m-0">APR</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">IU</h1>
                                    <h1 class="text-para m-0"><b>H.E.R. WORLD TOUR</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 5:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">11</h1>
                                    <h1 class="text-para m-0">MAY</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">NIALL HORAN</h1>
                                    <h1 class="text-para m-0"><b>THE SHOW</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">11</h1>
                                    <h1 class="text-para m-0">MAY</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">FESTIVAL</h1>
                                    <h1 class="text-para m-0"><b>RHAPSODY NUSANTARA</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 6:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">29</h1>
                                    <h1 class="text-para m-0">JUN</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">TREASURE</h1>
                                    <h1 class="text-para m-0"><b>RELAY TOUR [REBOOT]</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 7:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">19-21</h1>
                                    <h1 class="text-para m-0">JUL</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">FESTIVAL</h1>
                                    <h1 class="text-para m-0"><b>WE THE FEST</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 8:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">24</h1>
                                    <h1 class="text-para m-0">AUG</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">AESPA</h1>
                                    <h1 class="text-para m-0"><b>SYNK: PARALLEL LINE</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">23-25</h1>
                                    <h1 class="text-para m-0">AUG</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">FESTIVAL</h1>
                                    <h1 class="text-para m-0"><b>LALALA FEST 2024</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 10:
                    outputElement.innerHTML = `
                        <div class="col-12 col-sm-6 col-lg-4 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center">
                                <div class="kiri d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="text-para2 m-0">9</h1>
                                    <h1 class="text-para m-0">OCT</h1>
                                </div>
                                <div class="kanan d-flex justify-content-center flex-column px-4">
                                    <h1 class="text-para2 m-0">LANY</h1>
                                    <h1 class="text-para m-0"><b>A BEAUTIFUL BLUR</b></h1>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                default:
                    outputElement.innerHTML = `
                        <div class="col-12 my-2 my-lg-0">
                            <div class="block-event d-flex justify-content-center align-items-center p-2">
                                    <h1 class="text-para m-0" style="color: var(--yellow);"><b>NO UPCOMING EVENTS!</b></h1>
                            </div>
                        </div>
                    `;
                    break;
            }
        }
    </script>


</body>

</html>