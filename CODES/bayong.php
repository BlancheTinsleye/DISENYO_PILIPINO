<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISENYO PILIPINO</title>

    <link rel="stylesheet" href="STYLES/bayong_style.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        
    </style>
    

</head>
<body>
    <section class="cont">
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
                <p class="page_name">BAYONG</p>
                <div class="icons_cont">
                    <span class="material-symbols-outlined" id="icon_profile">person</span>
                    <span class="material-symbols-outlined" id="icon_heart">favorite</span>
                    <span class="material-symbols-outlined" id="icon_sb" >shopping_bag</span>
            </div>
        </div>
        
        <div class="added_to_cart_prdcts">
            <div class="column_heading">
                <p class="ch1">
                    PRODUKTO
                </p>
                <p class="ch2">
                    PRESYO
                </p>
                <p class="ch3">
                    BILANG
                </p>

            </div>
            
            
            <?php
                // NOTE 
                // THIS PHP CODE IS ONLY FOR SHOWING MULTIPLE PRODUCTS
                // DON'T MIND THIS TO CAUSE NO CONFUSION
                
                $prdcts = [
                    [
                        'link' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tatlerasia.com%2Fstyle%2Ffashion%2Fbarong-tagalog-the-traditional-filipino-mens-attire&psig=AOvVaw3SWkDV9F52lJ6qY8vw2fXl&ust=1726844230602000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJCegJmiz4gDFQAAAAAdAAAAABAR',
                        'src' => 'https://res.cloudinary.com/damtc4g0q/image/upload/v1726758220/barong1_y9rx6j.jpg',
                        'prdct_nm' => 'BARONG TAGALOG',
                        'prc' => 400,
                        'rate' => 4.5,
                        'liked' => true,
                        'in_cart' => true
                    ],
                    [
                        'link' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.hiblaltd.com%2Fproduct%2Fbarong-tagalog-loro-p3-green-cream-embroidery-m%2F&psig=AOvVaw3SWkDV9F52lJ6qY8vw2fXl&ust=1726844230602000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJCegJmiz4gDFQAAAAAdAAAAABAJ',
                        'src' => 'https://res.cloudinary.com/damtc4g0q/image/upload/v1726759243/barong2_uq26uc.jpg',
                        'prdct_nm' => 'BARONG',
                        'prc' => 350,
                        'rate' => 4.4,
                        'liked' => false,
                        'in_cart' => false
                    ],
                    [
                        'link' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.ph%2FDaster-Pambahay-Dress-LARGE-Size-%2528English-Garden-Blowy-Goldleaf%2529-i.54865243.10508290892&psig=AOvVaw0n2f8P4xgqgmw-H-TRbi5W&ust=1726845788844000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiJ8YKoz4gDFQAAAAAdAAAAABAE',
                        'src' => 'https://res.cloudinary.com/damtc4g0q/image/upload/v1726759507/daster1_wkhdye.jpg',
                        'prdct_nm' => 'Daster pang nanay',
                        'prc' => 120,
                        'rate' => 4.7,
                        'liked' => true,
                        'in_cart' => true
                    ]
                ];
                
                

                foreach ($prdcts as $prdct) {
                    echo '<div class="prdct_cont">
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
                          </div>';
                }
            ?>
        </div>

    </section>
    <div class="lower_cont">
        <div class="total_cont">
                <p class="ttl_txt">TOTAL</p>
                <p class="php_txt">php</p>
                <p class="ttl">100</p>
        </div>

        <button class="checkout_bttn">i-checkout</button>
    </div>
</body>
</html>