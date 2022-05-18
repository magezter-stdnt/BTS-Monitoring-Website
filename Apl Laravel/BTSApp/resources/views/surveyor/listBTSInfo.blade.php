<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List BTS - BTS Surveyor</title>
    <link rel="icon" type="image/x-icon" href="image/BTS logo.png">
    <link rel="stylesheet" href="css/dbAdmin.css">
    <link rel="stylesheet" href="css/listBTSInfo.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header Awal -->
    <header>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-bts-1">
            <a class="navbar-brand ps-3 d-flex bg-bts-3" href="#" style="padding-bottom:18px; border-top-right-radius: 40px; justify-content: center;">
                <img src="image/BTS logo3.png" id="logo" alt="logo" style="margin-left: -25px; margin-top:18px; width: 100px;">
            </a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Header Akhir -->


    <div id="layoutSidenav">
        <!-- Sidebar Awal -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #52784F; border-bottom-right-radius: 20px;">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">
                            <div class="d-flex sb-nav-link-icon">
                                <img src="./image/pp.png" style="width:50px; margin-right: 10px;">
                                <div class="d-flex flex-column">
                                    <small class="font-weight-normal" style="color:#F4D2EB; font-weight:lighter">Welcome</small>
                                    <p >{{ auth()->user()->name }}</p>

                                </div>
                            </div>
                        </div>

                        <div class="sb-sidenav-menu-heading">General</div>
                        <a class="nav-link" href="dashboardSurveyor.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Master Data</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Akun
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="editProfileSurveyor.html">Edit Profil</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Data BTS
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="listBTSInfo.html">BTS info</a>
                                <a class="nav-link" href="surveyList.html">Survey</a>
                                <a class="nav-link" href="monitoringSurveyor.html">Monitoring</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar Akhir -->

        <div id="layoutSidenav_content">
            <!-- Main Awal -->
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">List BTS</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">berikut adalah daftar BTS yang tersedia dalam database :</li>
                    </ol>
                    <div class="d-flex flex-wrap survey-cards cards" style="justify-content:space-between;">
                        <div id="card" class="card" style="--order: 1"  data-type="indexgaleri1">
                            <h2>ABC0001</h2>
                            <img src="image/indexgaleri1.jpg" alt="ABC0001">
                        </div>
                        <div id="card" class="card" style="--order: 2" data-type="indexgaleri2">
                            <h2>ABC0002</h2>
                            <img src="image/indexgaleri2.jpg" alt="ABC0002">
                        </div>
                        <div id="card" class="card" style="--order: 3" data-type="indexgaleri3">
                            <h2>ABC0003</h2>
                            <img src="image/indexgaleri3.jpg" alt="ABC0003">
                        </div>
                        <div id="card" class="card" style="--order: 4" data-type="indexgaleri4">
                            <h2>ABC9999</h2>
                            <img src="image/indexgaleri4.jpg" alt="ABC9999">
                        </div>
                        <div id="card" class="card" style="--order: 5" data-type="indexgaleri5">
                            <h2>DEF1001</h2>
                            <img src="image/indexgaleri5.jpg" alt="DEF1001">
                        </div>
                        <div id="card" class="card" style="--order: 6" data-type="indexgaleri6">
                            <h2>DEF1002</h2>
                            <img src="image/indexgaleri6.jpg" alt="DEF1002">
                        </div>
                        <div id="card" class="card" style="--order: 7" data-type="indexgaleri1">
                            <h2>DEF1004</h2>
                            <img src="image/indexgaleri1.jpg" alt="DEF1004">
                        </div>
                        <div id="card" class="card" style="--order: 8" data-type="indexgaleri2">
                            <h2>DEF8999</h2>
                            <img src="image/indexgaleri2.jpg" alt="DEF8999">
                        </div>
                        <div id="card" class="card" style="--order: 9" data-type="indexgaleri3">
                            <h2>TES1234</h2>
                            <img src="image/indexgaleri3.jpg" alt="TES1234">
                        </div>
                        <div id="card" class="card" style="--order: 10" data-type="indexgaleri4">
                            <h2>TES5678</h2>
                            <img src="image/indexgaleri4.jpg" alt="TES5678">
                        </div>
                        <div id="card" class="card" style="--order: 11" data-type="indexgaleri5">
                            <h2>WOW1010</h2>
                            <img src="image/indexgaleri5.jpg" alt="WOW1010">
                        </div>
                        <div id="card" class="card" style="--order: 12" data-type="indexgaleri6">
                            <h2>WOW0101</h2>
                            <img src="image/indexgaleri6.jpg" alt="WOW0101">
                        </div>
                    </div>
                </div>
            </main>
            <!-- Main Akhir -->

            <!-- Footer Awal -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Diskominfo BTS Surakarta 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Awal -->
        </div>
    </div>
    <script>
        const cards = document.querySelectorAll('.card');

        const toggleExpansion = (element, to, duration = 350) => {
            return new Promise((res) => {
            element.animate([
                {
            top: to.top,
            left: to.left,
            width: to.width,
            height: to.height
                }
            ], {duration, fill: 'forwards', ease: 'ease-in'})
            setTimeout(res, duration);
            })
        }

        const fadeContent = (element, opacity, duration = 300) => {
            return new Promise(res => {
                [...element.children].forEach((child) => {
                    requestAnimationFrame(() => {
                        child.style.transition = `opacity ${duration}ms linear`;
                        child.style.opacity = opacity;
                    });
                })
                setTimeout(res, duration);
            })
        }

        const getCardContent = (title, path) => {
            return `
                <div class="card-content">
                    <h2>${title}</h2>
                    <img src="image/${path}.jpg" alt="${title}">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eligendi fuga ullam? Aperiam blanditiis
                        cupiditate dicta eius exercitationem explicabo fugit, impedit iure libero nam nihil nisi perferendis
                        provident quaerat repellendus vitae voluptate? Aliquid amet architecto asperiores aut consequuntur
                        corporis debitis ea eveniet in maiores, nam placeat quae, ratione rerum ullam?abo fugit, impedit iure libero nam nihil nisi perferendis
                        provident quaerat repellendus vitae voluptate? Aliquid amet architecto asperiores aut consequuntur
                        corporis debitis ea eveniet in maiores, nam placeat quae, ratione rerum ullam?abo fugit, impedit iure libero nam nihil nisi perferendis
                        provident quaerat repellendus vitae voluptate? Aliquid amet architecto asperiores aut consequuntur
                        corporis debitis ea eveniet in maiores, nam placeat quae, ratione rerum ullam?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eligendi fuga ullam? Aperiam blanditiis
                        cupiditate dicta eius exercitationem explicabo fugit, impedit iure libero nam nihil nisi perferendis
                        provident quaerat repellendus vitae voluptate? Aliquid amet architecto asperiores aut consequuntur
                        corporis debitis ea eveniet in maiores, nam placeat quae, ratione rerum ullam?
                    </p>
                </div>
            `;
        }

        const onCardClick = async (e) => {
            const card = e.currentTarget;
            // clone the card
            const newCard = card.cloneNode(true);
            // get the location of the card in the view
            const {top, left, width, height} = card.getBoundingClientRect();
            // position the clone on top of the original
            newCard.style.position = 'fixed';
            newCard.style.top = top + 'px';
            newCard.style.left = left + 'px';
            newCard.style.width = width + 'px';
            newCard.style.height = height + 'px';
            newCard.style.cursor = 'unset';
            // newCard.style.padding = '10px';
            newCard.style.transform = 'scale(98%)';
            // cardClone.style = 'transform: scale(90%); position:fixed;'

            // hide the original card with opacity
            card.style.opacity = '0';
            // add card to the same container
            card.parentNode.appendChild(newCard);
            // create a close button to handle the undo
            const closeButton = document.createElement('button');
            closeButton.classList.add('button_close');


            closeButton.addEventListener('click', async () => {
                closeButton.remove();
                newCard.style.removeProperty('display');
                newCard.style.removeProperty('padding');
                [...newCard.children].forEach(child => child.style.removeProperty('display'));
                fadeContent(newCard, '0');
                await toggleExpansion(newCard, {top: `${top}px`, left: `${left}px`, width: `${width}px`, height: `${height}px`}, 400);
                card.style.removeProperty('opacity');
                newCard.remove();
            });


            fadeContent(newCard, '0')
                .then(() => {
                    [...newCard.children].forEach(child => child.style.display = 'none');
                });


            await toggleExpansion(newCard, {top: '0', left: '15vw', width: '85vw', height: '100vh'});
            const content = getCardContent(card.textContent, card.dataset.type)
            newCard.style.display = 'block';
            newCard.style.padding = '0 50px 0 50px';
            newCard.appendChild(closeButton);
            newCard.insertAdjacentHTML('afterbegin', content);
        };

        cards.forEach(card => card.addEventListener('click', onCardClick));
    </script>
</body>

</html>
