<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Portfolio - Asap Designs</title>

    <link rel="stylesheet" type="text/css" href="./css/portfolio.css">
    <?php include('./components/head.php') ?>
</head>

<body>
    <?php include('./components/navbar.php') ?>

    <section id="portfolio-section">
        <h1 class="subtitulo">Portfólio</h1>
        <div class="container">
            <div id="nanogallery2"></div>
        </div>
    </section>
    <script>
        jQuery(document).ready(function () {

            jQuery("#nanogallery2").nanogallery2({
                // ### gallery settings ### 
                thumbnailHeight: 150,
                thumbnailWidth: 150,
                itemsBaseURL: './img/portfolio/',

                // ### gallery content ### 
                items: [{
                        src: 'sorteiotenis2.jpg'
                    },
                    {
                        src: '4.jpg'
                    },
                    {
                        src: 'sorteiotenis1.jpg'
                    },                                    
                    {
                        src: 'sorteio_pods_station.jpg'
                    },
                    {
                        src: 'stories-pascoa.jpg'
                    },
                    {
                        src: 'ob_of_2.png'
                    },
                    {
                        src: 'sorteio_cactus_top.jpg'
                    },
                    {
                        src: 'mcm_-_1.jpg'
                    },
                    {
                        src: '5.jpg'
                    },
                    {
                        src:'stories_pods.jpg'
                    },
                    {
                        src:'sorteio_do_candango.jpg'
                    }



                ],
                galleryMosaic: [ // default layout
                    {
                        w: 2,
                        h: 2,
                        c: 1,
                        r: 1
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 1
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 2
                    },
                    {
                        w: 1,
                        h: 2,
                        c: 4,
                        r: 1
                    },
                    {
                        w: 2,
                        h: 1,
                        c: 5,
                        r: 1
                    },
                    {
                        w: 2,
                        h: 2,
                        c: 5,
                        r: 2
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 4,
                        r: 3
                    },
                    {
                        w: 2,
                        h: 1,
                        c: 2,
                        r: 3
                    },
                    {
                        w: 1,
                        h: 2,
                        c: 1,
                        r: 3
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 2,
                        r: 4
                    },
                    {
                        w: 2,
                        h: 1,
                        c: 3,
                        r: 4
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 5,
                        r: 4
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 6,
                        r: 4
                    }
                ],
                galleryMosaicXS: [ // layout for XS width
                    {
                        w: 2,
                        h: 2,
                        c: 1,
                        r: 1
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 1
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 2
                    },
                    {
                        w: 1,
                        h: 2,
                        c: 1,
                        r: 3
                    },
                    {
                        w: 2,
                        h: 1,
                        c: 2,
                        r: 3
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 2,
                        r: 4
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 4
                    }
                ],
                galleryMosaicSM: [ // layout for SM width
                    {
                        w: 2,
                        h: 2,
                        c: 1,
                        r: 1
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 1
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 2
                    },
                    {
                        w: 1,
                        h: 2,
                        c: 1,
                        r: 3
                    },
                    {
                        w: 2,
                        h: 1,
                        c: 2,
                        r: 3
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 2,
                        r: 4
                    },
                    {
                        w: 1,
                        h: 1,
                        c: 3,
                        r: 4
                    }
                ],
                galleryMaxRows: 2,
                galleryDisplayMode: 'rows',
                gallerySorting: 'random',
                thumbnailDisplayOrder: 'random',

                thumbnailHeight: '180',
                thumbnailWidth: '220',
                thumbnailAlignment: 'scaled',
                thumbnailGutterWidth: 0,
                thumbnailGutterHeight: 0,
                thumbnailBorderHorizontal: 0,
                thumbnailBorderVertical: 0,


                viewerToolbar: {
                    display: false
                },
                viewerTools: {
                    topLeft: 'label',
                    topRight: 'closeButton'
                },

                galleryDisplayTransition: 'rotateX',
                galleryDisplayTransitionDuration: 1500,
                thumbnailDisplayTransition: 'scaleUp', // thumbnail display animation
                thumbnailDisplayTransitionDuration: 600,
                thumbnailDisplayInterval: 30,

                thumbnailToolbarImage: null,
                thumbnailToolbarAlbum: null,
                thumbnailLabel: {
                    display: false
                },


                thumbnailBuildInit2: 'image_scale_1.15',
                thumbnailHoverEffect2: 'thumbnail_scale_1.00_1.05_300|image_scale_1.15_1.00',
                touchAnimation: true,
                touchAutoOpenDelay: 500
            });
        });
    </script>
    <?php include('./components/footer.php') ?>


    <script defer type="text/javascript" src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js" type="text/javascript"></script>

    <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet"
        type="text/css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js">
    </script>
    </script>
</body>

</html>