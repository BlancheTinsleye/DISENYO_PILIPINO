<?php
    // NOTE 
    // THIS PHP CODE IS ONLY FOR SHOWING MULTIPLE PRODUCTS
    // DON'T MIND THIS TO CAUSE NO CONFUSION
    $prdcts = [
        [
            'id' => 1,
            'src' => 'https://res.cloudinary.com/damtc4g0q/image/upload/v1726758220/barong1_y9rx6j.jpg',
            'prdct_nm' => 'BARONG TAGALOG',
            'prc' => 400,
            'rate' => 4.5,
            'liked' => true,
            'in_cart' => true
        ],
        [
            'id' => 2,
            'src' => 'https://res.cloudinary.com/damtc4g0q/image/upload/v1726759243/barong2_uq26uc.jpg',
            'prdct_nm' => 'BARONG',
            'prc' => 350,
            'rate' => 4.4,
            'liked' => false,
            'in_cart' => false
        ],
        [
            'id' => 3,
            'src' => 'https://res.cloudinary.com/damtc4g0q/image/upload/v1726759507/daster1_wkhdye.jpg',
            'prdct_nm' => 'Daster pang nanay',
            'prc' => 120,
            'rate' => 4.7,
            'liked' => true,
            'in_cart' => true
        ]
    ];
    $activeCategory = isset($_GET['category']) ? $_GET['category'] : 1;

    $lst_of_prdcts = [];

    // switch ($activeCategory){
    //     case 'babayaran':
    //         $sample_str = 'babayaran';
    //         break;
    //     case 'ipapadala':
    //         $sample_str = 'ipapadala';
    //         break;
    //     case 'parating':
    //         $sample_str = 'parating';
    //         break;
    //     case 'ibinalik':
    //         $sample_str = 'ibinalik';
    //         break;
    //     case 'nakuha':
    //         $sample_str = 'nakuha';
    //         break;
    //     case 'ikinansela':
    //         $sample_str = 'ikinansela';
    //         break;
    //     default:
            // $sample_str = 'default';
            
            // foreach ($prdcts as $index => $prdct) {
            //     $to_append = '<div class="prdct_cont">
            //             <input type="checkbox" id="customCheckbox' . $index . '">
            //             <label for="customCheckbox' . $index . '"></label>
            //             <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
            //             <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
            //             <p class="prdct_prc">php ' . htmlspecialchars($prdct['prc']) .'</p>
            //             <div class="inp_bttn_cont">
            //                 <button class="minus">-</button>
            //                 <input type="text" aria-valuenow="1" value="1" class="inp_val">
            //                 <button class="plus">+</button>
            //             </div>
            //             <button class="tanggalin_bttn">Tanggalin</button>
            //         </div>';
            //         };

            //         $lst_of_prdcts[] = $to_append;
            // };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISENYO PILIPINO</title>

    <link rel="stylesheet" href="STYLES/mga_pinamili_style.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <section>
    <div class="top_cont">
            <div class="language_cont">
                <label for="languages">LINGWAHE:</label>
                <select class="lang_dd" name="languages" id="languages">
                    <option value="tagalog">TAGALOG</option>
                    <option value="english">ENGLISH</option>
                </select>
            </div>

            <div class="logo-page_name-icons">
                <div class="logo_cont">
                    <img class="logo" src="https://res.cloudinary.com/damtc4g0q/image/upload/v1726674128/DISENYO_PILIPINO2_atlzui.png" alt="disenyo pilipino logo">
                </div>
                <p class="page_name">MGA PINAMILI</p>
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
            </div>
        </div>

    <ul class="ctgries">
        <li class="ctgry">
            <a href="?category=babayaran">Babayaran</a>
        </li>
        <li class="ctgry">
            <a href="?category=ipapadala">Ipapadala pa lamang</a>
        </li>
        <li class="ctgry">
            <a href="?category=parating">Parating</a>
        </li>
        <li class="ctgry">
            <a href="?category=ibinalik">Ibinalik</a>
        </li>
        <li class="ctgry">
            <a href="?category=nakuha">Mga Nakuha na</a>
        </li>
        <li class="ctgry">
            <a href="?category=ikinansela">Mga Ikinansela</a>
        </li>
    </ul>
    <div class="column_heading_cont">
        <div class="column_heading_babayaran">
            <p class="ch1_bbyrn">
                PRODUKTO
            </p>
            <p class="ch2_bbyrn">
                PRESYO
            </p>
            <p class="ch3_bbyrn">
                BILANG
            </p>
        </div>
    </div>

    <div>
        <?php
        switch ($activeCategory) {
            case 'babayaran':
                $sample_str = 'babayaran';
                break;
            case 'ipapadala':
                $sample_str = 'ipapadala';
                break;
            case 'parating':
                $sample_str = 'parating';
                break;
            case 'ibinalik':
                $sample_str = 'ibinalik';
                break;
            case 'nakuha':
                $sample_str = 'nakuha';
                break;
            case 'ikinansela':
                $sample_str = 'ikinansela';
                break;
            default: 
                foreach ($prdcts as $index => $prdct) {
                    $checkboxId = 'customCheckbox_' . $prdct['id'];  // Unique ID for each product
                    echo '<div class="prdct_cont">
                            <input type="checkbox" id="' . $checkboxId . '">
                            <label class="cb-label" for="' . $checkboxId . '"></label>
                            <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
                            <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
                            <p class="prdct_prc">' . htmlspecialchars($prdct['prc']) .'</p>
                            <div class="inp_bttn_cont">
                                <button class="minus">-</button>
                                <input type="text" aria-valuenow="1" value="1" class="inp_val">
                                <button class="plus">+</button>
                            </div>
                            <button class="tanggalin_bttn">Tanggalin</button>
                        </div>';
                        };
                    }
        ?>
    </div>

    <!-- <div class="prdct_cont">
        <input type="checkbox" id="customCheckbox">
        <label id="cb" for="customCheckbox"></label>
        <img class="prdct_img" src="'. htmlspecialchars($prdct['src']) .'">
        <p class="prdct_name">' . htmlspecialchars($prdct['prdct_nm']) . '</p>
        <p class="prdct_prc">php ' . htmlspecialchars($prdct['prc']) .'</p>
        <div class="inp_bttn_cont">
        <button class="minus">
            -
        </button>
        <input type="text" aria-valuenow= 1, value= 1 class="inp_val">
        <button class="plus">
            +
        </button>
        </div>
            <button class="tanggalin_bttn">Tanggalin</button>
        </div>
    </div> -->
    </section>
</body>
</html>