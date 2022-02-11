<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body id="body">

<nav id="menu_nav_pizza">
    <ul class="ul_nav_pizza">
        <div class="wrap_menu_pizza">
        <li><a href="<?= path('accueil');?>"><svg width="231" height="73" viewBox="0 0 231 73" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo_pizza">
<g clip-path="url(#clip0_1_138)">
<path d="M98.8583 73C85.2828 73 77.7224 66.534 71.5785 59.5429L70.6358 58.4743L69.3021 59.004C67.5638 59.6923 65.8163 60.0772 64.1101 60.1406H64.0503C64.0458 60.1406 63.7652 60.1451 63.6549 60.1451C60.5737 60.1451 57.8144 59.1399 55.676 57.2381L54.5907 56.2737L53.3215 56.9936C53.2387 57.0434 52.9582 57.1974 52.8386 57.2608L52.6638 57.3423C50.6174 58.3158 48.5434 58.8048 46.5061 58.8048C46.3497 58.8048 46.1934 58.8003 46.0416 58.7957C43.6917 58.7052 41.5532 58.0396 39.6907 56.8215C37.8696 55.6262 36.444 54.0097 35.4553 52.0174C34.8529 50.7993 34.4482 49.4817 34.2596 48.1052L33.8687 45.2435L31.0635 46.7559L31.0175 46.783C29.5137 47.6931 27.8765 48.5489 26.152 49.3142C25.8301 49.4591 25.5082 49.5994 25.1909 49.7307L24.3585 50.0839L24.0734 50.9307C23.7699 51.8363 23.4847 52.7418 23.2226 53.6339C22.5834 55.8073 22.0039 58.0215 21.5073 60.2221L21.4981 60.2673C21.3325 61.0824 21.1624 61.825 20.9968 62.4725L20.6703 63.8942L20.1874 64.8995C20.169 64.9402 20.0863 65.0987 20.0403 65.1892L19.9253 65.3794C18.3617 68.0147 15.7082 69.5904 12.8248 69.5904C11.5694 69.5904 9.66088 69.2825 7.71561 67.8245L7.27873 67.4985L6.90163 67.1091C5.08972 65.2345 4.45049 63.052 4.0688 61.748L4.0504 61.6891C3.77448 60.7428 3.65951 59.9142 3.58133 59.3119L3.51235 58.8093C3.22262 56.3008 3.16284 53.738 3.33299 51.2159C3.35139 50.9442 3.37438 50.6726 3.39738 50.4009L3.48015 49.45L2.77655 48.7934C0.610532 46.783 -0.309219 43.8308 0.320811 40.9057C0.61973 39.5156 1.33714 38.2704 2.38565 37.3105L3.92163 35.9023L2.42704 34.4488C1.24516 33.2987 0.463372 31.8452 0.169052 30.2469C-0.433385 27.0818 0.69331 24.4103 1.06121 23.5319C1.54868 22.3818 2.11892 21.2815 2.75815 20.2582C5.05753 16.6086 7.93635 13.3937 11.3072 10.7132C14.393 8.25902 17.6535 6.09918 21.0014 4.29705L21.121 4.23366L21.2405 4.17479C24.5057 2.57642 29.5781 0.679196 34.0251 0.140367C34.7977 0.0452797 35.5795 0 36.3567 0C38.2421 0 40.1506 0.276206 42.0223 0.824091C45.292 1.77949 47.9685 3.59521 49.969 6.22144C51.2566 7.91037 52.1948 9.7759 52.7604 11.7682L53.1559 13.1628L54.6229 13.2172C56.7015 13.2941 58.5502 13.8375 60.1184 14.8382C60.9692 15.3815 63.0248 16.9573 63.7698 19.8733L64.3171 22.0195L66.4233 21.2453C68.1524 20.6113 69.9552 20.1133 71.7717 19.7737C73.8595 19.3843 75.9381 19.1579 77.9478 19.1081C78.2605 19.099 78.564 19.099 78.8629 19.099C80.5783 19.099 82.2476 19.2213 83.8296 19.4612C85.5817 19.7284 87.2833 20.154 88.8928 20.72C90.1943 21.1773 91.275 21.7524 92.1947 22.4723L93.2156 23.2693L94.3745 22.6806C95.1287 22.2957 95.9105 21.938 96.6969 21.6211C98.7204 20.806 100.85 20.1812 103.02 19.7737C105.108 19.3843 107.187 19.1579 109.196 19.1081C109.509 19.099 109.813 19.099 110.111 19.099C111.827 19.099 113.496 19.2213 115.078 19.4612C117.217 19.7872 118.913 20.2219 120.413 20.8242C121.829 21.3947 123.19 22.2912 124.248 23.3598C124.653 23.7719 125.016 24.2111 125.324 24.6684L126.469 26.3664L128.162 25.1936C128.681 24.8314 129.215 24.4828 129.753 24.1522L129.918 24.0481L130.093 23.953C132.466 22.6761 134.913 21.8067 137.364 21.3766C138.288 21.2136 139.212 21.1321 140.114 21.1321C142.289 21.1321 144.372 21.5984 146.308 22.5221L146.534 22.6353C147.246 23.0066 147.936 23.4685 148.552 24.0028L150.213 25.4382L151.509 23.6768C151.772 23.3236 152.043 22.9795 152.314 22.6625C153.492 21.286 155.4 19.3752 158.352 18.6417L158.564 18.5919C159.332 18.4243 160.128 18.3383 160.896 18.3383C162.192 18.3383 163.434 18.5828 164.588 19.0628C165.706 19.5292 166.69 20.2083 167.513 21.0732L168.24 21.8384L169.293 21.6754C169.927 21.5803 170.571 21.526 171.206 21.5124L171.482 21.5079C174.246 21.5079 176.72 22.3184 178.821 23.9213C179.038 24.0843 179.249 24.2609 179.451 24.4375L180.615 25.4608L181.912 24.6095C182.726 24.0752 183.577 23.5817 184.441 23.1425C186.373 22.1644 188.424 21.4626 190.534 21.0551C191.592 20.8513 192.641 20.7291 193.652 20.6928L194.531 20.6611L195.106 20.0046C195.69 19.3344 196.38 18.7685 197.157 18.3247L197.203 18.2975L197.249 18.2704C198.03 17.7678 198.886 17.3331 199.787 16.9844C200.532 16.6992 201.291 16.4411 202.036 16.2192L202.776 15.9973L203.176 15.3453C203.678 14.5257 204.188 13.7469 204.689 13.0225C205.848 11.3607 207.145 9.7442 208.539 8.23186L208.773 7.97829L209.031 7.74736C209.84 7.03194 210.718 6.41614 211.638 5.92259C212.779 5.31131 214.025 4.89927 215.345 4.69551C215.869 4.61853 216.398 4.57778 216.899 4.57778C219.171 4.57778 221.254 5.33848 222.914 6.78291C225.103 8.68013 226.17 11.4377 225.844 14.3446L225.825 14.494L225.802 14.6435C225.743 15.0238 225.669 15.4042 225.577 15.7664L225.324 16.8078L226.074 17.5867C227.826 19.4114 228.58 21.9245 228.143 24.4873C228.005 25.3521 227.752 26.1762 227.398 26.9414L226.722 28.3995L228.033 29.3549C230.442 31.1117 231.496 34.1002 230.774 37.1566C230.553 38.0938 230.318 38.841 230.024 39.5111L229.95 39.6741C229.261 41.1593 228.414 42.8437 227.449 44.6594C226.451 46.534 225.329 48.4267 224.115 50.2922C222.873 52.1894 221.512 54.0459 220.068 55.8118C218.467 57.7634 216.729 59.4795 214.908 60.9148L214.798 61.0009L214.683 61.0824C213.731 61.7706 212.737 62.3593 211.73 62.8392C210.392 63.4731 208.948 63.8807 207.439 64.0482L207.348 64.0573C206.906 64.098 206.474 64.1206 206.046 64.1206C204.653 64.1206 203.31 63.8988 202.054 63.4641C200.656 62.9796 199.359 62.2778 198.196 61.3812L198.063 61.2771L197.934 61.1684C196.936 60.3171 196.076 59.3572 195.377 58.3112L194.526 57.0389L193.059 57.5279C190.912 58.2388 188.732 58.6373 186.584 58.7097C186.35 58.7188 186.12 58.7233 185.89 58.7233C184.529 58.7233 183.204 58.5829 181.953 58.3112L180.845 58.0667L180.063 58.8772C179.856 59.081 179.658 59.2712 179.456 59.4523L178.946 59.9142L178.831 60.5888C178.706 61.3224 178.467 62.0287 178.118 62.6943C176.895 65.0217 174.457 66.4661 171.767 66.4661C169.32 66.4661 167.315 64.7319 164.262 62.8166L164.22 62.7804C163.186 62.1238 159.944 60.4077 153.951 60.4077C152.369 60.4077 150.718 60.5164 149.049 60.7382L148.994 60.7473C138.095 62.4679 129.693 65.2979 122.28 67.7974C113.979 70.5821 106.814 73 98.8583 73Z" fill="#FBFAF7"/>
<path d="M19.0343 44.6231C18.1284 46.9369 17.3328 49.2462 16.6568 51.56C15.9761 53.8738 15.3691 56.2057 14.8311 58.5602C14.7483 59.1262 14.1504 61.5442 14.0263 61.7842C13.4468 62.7577 12.7294 62.9207 11.8649 62.2687C11.1888 61.5713 10.8945 60.5344 10.6278 59.6198C10.4576 59.0402 10.4025 58.4516 10.3197 57.8856C10.0713 55.7348 10.0208 53.5931 10.1633 51.4649C10.3059 49.3368 10.6278 47.2765 11.1199 45.2887C9.88279 44.8858 8.7515 44.4149 7.72138 43.8896C7.16493 43.5274 6.83842 42.898 7.00857 42.092C7.04536 41.9199 7.34888 41.9018 7.72138 41.938C8.46178 42.0196 9.101 42.0829 9.63906 42.1192C10.1725 42.1599 10.7198 42.169 11.2762 42.1509C11.8327 42.1328 12.4397 42.0513 13.0973 41.9064C13.7549 41.766 14.5827 41.5532 15.5715 41.2679C18.4549 40.1721 21.2969 38.7006 24.1021 36.8577C26.9028 35.0103 29.4091 32.9229 31.6119 30.5909C33.8147 28.259 35.6082 25.7415 36.9878 23.0428C38.3675 20.3441 39.0987 17.5957 39.1815 14.7974C39.1815 13.5794 38.8411 12.719 38.1605 12.2119C37.4799 11.7048 36.6062 11.3923 35.5346 11.2701C33.8055 11.1478 32.1362 11.2701 30.5266 11.6369C28.9216 12.0036 27.3765 12.5289 25.8911 13.2171C24.4057 13.9054 23.0076 14.7476 21.6878 15.7437C20.368 16.7399 19.1309 17.804 17.9812 18.9405C16.7855 20.1177 15.7646 21.3539 14.923 22.6534C14.0769 23.9529 13.3457 25.3113 12.7294 26.7331C12.6834 26.8463 12.3983 27.281 12.5455 27.6161C12.5869 27.7157 12.7708 27.8289 13.1019 27.9511C13.4836 28.1006 13.4606 28.5805 12.9456 28.988C12.4305 29.3956 11.7591 29.6989 10.9359 29.9027C10.1127 30.1065 9.30795 30.1472 8.52616 30.025C7.74437 29.9027 7.02697 29.5767 6.9028 28.8431C6.69586 27.7881 7.03157 26.7467 7.38567 25.9181C7.73517 25.0849 8.13527 24.3061 8.59054 23.5771C10.4852 20.5751 12.826 17.967 15.6036 15.7573C18.3859 13.5477 21.2785 11.6278 24.2861 10.0068C27.3259 8.51708 31.6671 7.01379 34.854 6.62891C36.6613 6.41157 38.4089 6.59722 40.0782 7.08624C41.7476 7.57526 43.3019 8.50349 44.4976 10.0702C45.7025 11.655 46.3233 13.3892 46.5073 15.1506C46.6912 16.9165 46.5487 18.6688 46.075 20.4166C45.6013 22.1599 44.8885 23.8352 43.9412 25.4381C42.9938 27.041 41.9821 28.5126 40.9106 29.8484C38.8917 32.2029 36.8223 34.2586 34.6977 36.0245C32.573 37.7904 30.2185 39.3616 27.6202 40.7427C26.3003 41.5532 24.8701 42.3048 23.325 42.9931C21.7844 43.6677 20.3542 44.2156 19.0343 44.6231ZM12.0488 40.5434C12.7478 37.5414 13.6124 34.6707 14.6425 31.9312C15.6726 29.1918 16.8453 26.5882 18.1651 24.1114C18.9883 22.8119 19.8759 21.6074 20.8232 20.489C21.7706 19.3752 22.9019 18.533 24.2217 17.9624C25.1691 17.5594 25.983 17.5277 26.6636 17.8719C27.3443 18.216 27.7444 18.8363 27.8685 19.7283C27.9927 20.7834 27.7949 22.0512 27.2799 23.5318C26.7648 25.0125 26.1578 26.5248 25.4542 28.0643C24.7552 29.6084 24.0332 31.089 23.2928 32.5063C22.5524 33.9281 21.9959 35.1053 21.6234 36.0381C21.1267 36.4864 20.5105 36.9437 19.7701 37.4055C19.0297 37.8719 18.2157 38.3111 17.3282 38.7141C16.4406 39.1217 15.5347 39.4839 14.6103 39.8099C13.6906 40.1404 12.8306 40.3804 12.0488 40.5434Z" fill="#037A00"/>
<path d="M44.8103 33.3033C44.9758 32.9773 45.1506 32.6649 45.3345 32.3615C45.5185 32.0581 45.7162 31.7638 45.9232 31.4785C46.9119 30.2605 48.1674 29.6538 49.6942 29.6538C50.0253 29.6538 50.3748 29.7262 50.7427 29.8666C51.1152 30.0069 51.4325 30.2016 51.6992 30.4462C51.9659 30.6907 52.1959 30.994 52.3798 31.3608C52.5638 31.7276 52.6282 32.1306 52.596 32.5788C52.5454 33.2716 52.4304 34.0595 52.0993 34.8292C51.2761 36.7763 50.453 38.6146 49.6252 40.3353C48.802 42.0604 48.2042 43.772 47.8317 45.479C47.7489 46.1265 47.8087 46.7061 48.0156 47.2132C48.2226 47.7204 48.6962 47.9151 49.4366 47.7928C50.3012 47.6706 51.3129 47.1046 52.4672 46.0903C53.6215 45.076 54.7528 43.9305 55.8657 42.6536C56.9786 41.3767 57.604 43.8625 56.5141 45.1168C55.4242 46.3756 54.2883 47.5302 53.1156 48.5852C51.943 49.6402 50.7979 50.4734 49.685 51.0801C48.4893 51.6461 47.358 51.9133 46.2865 51.8725C45.215 51.8318 44.2768 51.5465 43.472 51.0213C42.6673 50.4915 42.0418 49.7716 41.5866 48.8614C41.1359 47.9468 40.9289 46.9053 40.9703 45.7281C41.0117 43.4143 41.4256 41.2771 42.2074 39.3074C42.9938 37.3287 43.8629 35.3318 44.8103 33.3033ZM49.57 26.1219C49.1147 25.5152 48.8894 24.8722 48.8894 24.2066C48.8894 23.541 49.0549 22.898 49.386 22.2913C49.7172 21.6845 50.2 21.1457 50.8393 20.6793C51.4785 20.2129 52.2281 19.9186 53.0972 19.7964C54.5412 19.6334 55.6403 19.7964 56.4037 20.2854C57.1671 20.7744 57.3833 21.7253 57.0522 23.1471C56.8452 23.8761 56.4359 24.5779 55.8151 25.248C55.1943 25.9182 54.5045 26.4344 53.7457 26.8011C52.9823 27.1679 52.2189 27.3173 51.4601 27.2585C50.6921 27.186 50.0621 26.8102 49.57 26.1219Z" fill="#037A00"/>
<path d="M72.1269 49.6401C71.152 48.5896 70.2184 47.5527 69.2527 46.5973C68.2824 45.6464 67.3074 44.9038 66.3187 44.3741C65.33 43.8488 64.2998 43.8262 63.2283 44.3152C61.9407 44.9491 61.1037 46.4931 60.8784 47.3897C60.7496 47.9104 60.7956 48.2092 60.8784 48.576C61.1129 49.4046 61.6004 49.7216 62.1752 49.7035C62.7501 49.6854 63.3479 49.4816 63.9687 49.0967C64.585 48.7119 65.1736 48.2545 65.7301 47.7293C66.2865 47.204 66.6682 46.8373 66.8751 46.6335C68.3008 47.4169 69.8597 49.4137 70.2736 50.1653C69.4091 51.0981 68.3881 51.8271 67.2155 52.3569C66.0428 52.8821 64.9161 53.1674 63.8492 53.2081C62.281 53.2489 61.0255 52.8006 60.0782 51.8679C59.1308 50.9351 58.6986 49.7397 58.7813 48.2772C58.9055 46.9369 59.3148 45.7324 60.0184 44.6548C60.7174 43.5817 61.5958 42.7168 62.6443 42.0693C63.6974 41.4218 64.8793 41.0143 66.1991 40.8513C67.519 40.6883 68.8572 40.8332 70.2184 41.2769C71.5383 39.6559 73.0099 37.8492 74.6378 35.8615C76.2658 33.8737 78.3582 31.6233 80.9105 29.1057C79.2642 28.499 77.7282 28.2137 76.3072 28.2545C74.8862 28.2952 73.5893 28.5488 72.412 29.0152C71.2394 29.4816 70.2092 30.1019 69.3217 30.8716C68.4341 31.6414 67.7259 32.4338 67.1879 33.2443C66.6498 34.0548 66.2911 34.8381 66.1072 35.5853C65.9232 36.3369 65.9508 36.9165 66.1991 37.3195C66.0612 37.4327 65.6933 37.4417 65.1184 37.41C64.6218 37.3829 62.2304 37.161 61.1957 36.9255C60.6254 36.7942 60.4001 36.6584 60.2621 36.5859C59.954 36.3822 59.7425 36.1467 59.6827 35.4947C59.6229 34.8472 59.8161 34.1952 60.2713 33.5477C61.1359 32.2074 62.2488 31.0528 63.61 30.0792C64.9713 29.1057 66.4521 28.2952 68.0616 27.6432C69.6666 26.9957 71.3359 26.5067 73.0697 26.1807C74.7988 25.8546 76.4911 25.6735 78.1375 25.6328C79.7838 25.592 81.3428 25.6826 82.8052 25.9045C84.2676 26.1263 85.5277 26.4659 86.6084 26.8463C87.3258 27.0998 87.8179 27.376 88.1536 27.6975C88.8526 28.3631 88.733 29.5449 88.4847 30.2468C88.3283 30.686 88.1536 30.9169 87.8455 31.2882C85.7438 33.439 83.6744 35.549 81.6325 37.6183C79.5907 39.6876 77.6224 41.938 75.7277 44.3741C77.5029 46.706 82.4465 53.4209 91.9935 56.1921C101.485 58.9451 115.548 54.8925 134.716 50.4551C152.302 46.9188 164.474 49.7488 171.239 57.4644C173.171 60.154 171.814 59.9186 168.977 57.7089C165.495 54.9967 157.466 52.6014 148.039 53.8602C124.58 57.5414 112.283 66.0495 98.8733 66.0495C83.9687 66.054 78.4226 56.4004 72.1269 49.6401Z" fill="#037A00"/>
<path d="M98.1191 46.629C98.3674 46.7513 98.6433 46.955 98.9514 47.2358C99.2596 47.521 99.5769 47.8425 99.908 48.2093C100.239 48.5761 100.547 48.9292 100.837 49.2734C101.127 49.6175 101.352 49.9118 101.518 50.1563C100.653 51.0891 99.6321 51.8181 98.4594 52.3479C97.2867 52.8731 96.16 53.1584 95.0885 53.1991C93.5203 53.2399 92.2649 52.7916 91.3175 51.8588C90.3702 50.9261 89.9379 49.7307 90.0207 48.2681C90.1448 46.9279 90.5541 45.7234 91.2577 44.6458C91.9567 43.5726 92.8351 42.7078 93.8836 42.0603C94.9367 41.4128 96.1186 41.0053 97.4385 40.8423C98.7583 40.6793 100.097 40.8242 101.458 41.2679C102.778 39.6469 104.249 37.8402 105.877 35.8524C107.505 33.8647 109.598 31.6143 112.15 29.0967C110.499 28.49 108.968 28.2047 107.547 28.2454C106.126 28.2862 104.829 28.5398 103.651 29.0061C102.479 29.4725 101.449 30.0929 100.561 30.8626C99.6734 31.6324 98.9652 32.4248 98.4272 33.2353C97.8891 34.0458 97.5304 34.8291 97.3465 35.5762C97.1625 36.3279 97.1901 36.9075 97.4385 37.3104C97.3143 37.392 96.9556 37.4236 96.3577 37.401C95.7599 37.3829 92.9869 37.4372 91.4325 36.6313C91.1106 36.4094 90.3518 35.3634 91.5061 33.5386C92.3706 32.1984 93.4835 31.0437 94.8448 30.0702C96.206 29.0967 97.6868 28.2862 99.2963 27.6342C100.901 26.9867 102.571 26.4976 104.304 26.1716C106.034 25.8456 107.726 25.6645 109.372 25.6237C111.019 25.583 112.578 25.6736 114.04 25.8954C115.502 26.1173 116.776 26.4116 117.843 26.8372C118.469 27.0863 119.034 27.5074 119.361 27.8379C120.418 28.902 119.715 30.5457 119.08 31.2792C116.979 33.43 114.909 35.54 112.867 37.6093C110.825 39.6786 108.857 41.929 106.962 44.365C107.661 45.4201 108.475 46.3211 109.404 47.0728C110.333 47.8244 111.391 48.3632 112.587 48.6847C113.617 49.0515 114.656 49.0787 115.709 48.7753C116.762 48.4719 117.788 47.9648 118.8 47.2539C119.811 46.543 120.759 45.6827 121.642 44.6684C122.529 43.6541 123.343 42.5991 124.084 41.5034C124.824 40.4076 125.454 39.3435 125.969 38.3066C126.484 37.2697 126.866 36.3686 127.114 35.5989C127.156 35.4359 127.257 35.2729 127.422 35.1099C127.505 34.9468 127.671 34.8653 127.919 34.8653C128.126 34.8246 128.269 34.9242 128.351 35.1687C128.351 35.3317 128.37 35.4947 128.411 35.6532C128.452 35.8162 128.429 35.9792 128.351 36.1422C127.937 37.8447 127.215 39.6514 126.19 41.5577C125.16 43.464 123.932 45.248 122.511 46.9143C121.09 48.5806 119.512 49.9978 117.783 51.1751C116.054 52.3524 114.279 53.0633 112.467 53.3033C111.354 53.4663 110.283 53.4346 109.253 53.2127C108.223 52.9908 107.234 52.6331 106.286 52.1486C105.298 51.5419 104.327 50.6997 103.38 49.622C102.433 48.5489 101.472 47.5346 100.506 46.5792C99.5355 45.6283 98.5605 44.8857 97.5718 44.356C96.5831 43.8307 95.553 43.8081 94.4815 44.2971C94.0814 44.4782 93.7548 44.7182 93.4237 45.0623C93.0926 45.4065 92.8213 45.7144 92.596 46.1219C92.3706 46.5294 92.2143 46.9415 92.1315 47.3671C92.0487 47.7927 92.0487 48.1866 92.1315 48.5534C92.4212 49.3232 92.8535 49.699 93.4283 49.6809C94.0032 49.6628 94.601 49.459 95.2219 49.0741C95.8381 48.6892 96.4267 48.2319 96.9832 47.7067C97.535 47.1995 97.9121 46.8328 98.1191 46.629Z" fill="#037A00"/>
<path d="M140.046 47.1408C140.005 46.3892 139.968 45.6783 139.931 44.99C139.25 45.873 138.101 46.7967 136.542 47.6208C131.667 48.9701 125.233 50.2289 123.311 50.8175C122.736 49.9663 122.111 48.5762 122.069 46.9959C122.069 45.4564 122.345 43.8716 122.902 42.2506C123.458 40.6296 124.231 39.0448 125.22 37.5053C126.208 35.9658 127.404 34.5214 128.807 33.1856C130.205 31.8453 131.731 30.6726 133.382 29.6538C135.111 28.721 136.845 28.1007 138.574 27.7973C140.303 27.4939 141.89 27.6841 143.334 28.3769C144.199 28.8252 144.806 29.5632 145.155 30.6001C145.505 31.637 145.39 32.7011 144.815 33.7969C144.668 34.064 144.553 34.2316 144.341 34.4489C144.111 34.6889 143.987 34.8293 143.702 34.7115C143.495 34.5893 143.403 34.3855 143.426 34.1048C143.444 33.8195 143.458 33.5976 143.458 33.4346C143.426 32.6604 142.86 32.2981 142.037 32.5834C140.51 33.1539 139.071 33.901 137.71 34.8338C136.349 35.7665 135.134 36.7899 134.063 37.9083C132.991 39.0267 132.062 40.1587 131.281 41.3178C130.499 42.4725 129.878 43.5592 129.506 44.5735C129.358 44.8768 129.285 45.1666 129.184 45.5696C129.083 45.9771 129.046 46.2896 129.023 46.6744C129 47.0593 129.064 47.3853 129.207 47.6479C129.349 47.9106 129.63 48.0057 130.039 47.9242C132.141 47.2359 133.985 46.3529 135.571 45.2753C137.158 44.2022 138.735 42.9932 140.299 41.6529C140.671 41.0869 140.947 40.4983 141.131 39.887C141.315 39.2803 141.637 38.6916 142.088 38.1211C142.497 37.5551 142.994 37.1566 143.569 36.9348C144.143 36.7129 144.691 36.6631 145.206 36.7808C145.721 36.9031 146.144 37.1747 146.475 37.6004C146.806 38.026 146.907 38.6237 146.783 39.398C146.7 40.453 146.618 41.499 146.535 42.5313C146.452 43.5682 146.291 45.5741 146.208 46.6292C144.87 46.5839 141.389 46.9099 140.046 47.1408Z" fill="#037A00"/>
<path d="M174.647 29.0424C175.682 29.8302 176.275 30.9079 176.523 31.9629C176.772 33.0179 176.749 34.1635 176.463 35.3996C176.174 36.6358 175.723 37.9534 175.102 39.3571C174.486 40.7562 173.847 42.169 173.185 43.5862C172.527 45.008 171.929 46.4253 171.391 47.847C170.853 49.2688 170.568 50.6272 170.526 51.9222C170.568 52.7327 170.95 53.2082 171.672 53.3531C172.394 53.4934 173.125 53.3621 173.865 52.9591C174.196 52.7961 174.504 52.615 174.794 52.4112C175.084 52.2075 176.381 51.234 176.588 51.1932C176.795 51.234 176.813 51.3426 176.772 51.56C176.657 52.1713 175.797 53.3395 175.194 53.9326C174.431 54.6888 173.355 55.5355 172.325 55.8208C171.014 54.2994 168.149 51.5419 164.424 49.8892C164.428 49.6582 164.447 49.4273 164.47 49.1873C164.635 47.4441 165.068 45.5876 165.767 43.6179C166.466 41.6483 167.188 39.8144 167.928 38.1119C168.669 36.4094 169.266 34.9695 169.722 33.7922C170.172 32.6149 170.241 31.9358 169.906 31.7818C169.552 31.6188 168.259 32.0444 167.312 32.6964C166.365 33.3439 165.436 34.1363 164.53 35.0691C163.624 36.0019 162.801 37.0161 162.056 38.1119C161.315 39.2077 160.703 40.1721 160.28 41.0143C159.457 42.3954 158.859 43.7628 158.285 44.9582C157.889 45.7778 157.484 46.6471 157.07 47.5708C155.889 47.2765 153.589 46.8599 151.598 46.6879C151.538 46.14 151.524 45.574 151.547 44.9899C151.589 43.9756 151.69 42.9931 151.855 42.0377C152.021 41.0868 152.164 40.3261 152.288 39.7556C152.577 38.4968 152.918 37.2289 153.309 35.9521C153.7 34.6752 154.113 33.4571 154.546 32.298C154.978 31.1434 155.452 30.0883 155.967 29.1329C156.482 28.1821 157.015 27.4078 157.544 26.7874C158.331 25.8683 159.03 25.2072 160.018 24.9627C160.759 24.7997 161.398 24.8314 161.936 25.0532C162.469 25.2751 162.842 25.7324 163.049 26.4207C163.297 27.3534 163.297 28.2138 163.049 29.0062C162.801 29.7985 162.511 30.6 162.184 31.4105C161.977 31.8588 161.793 32.2527 161.628 32.5968C161.462 32.941 161.297 33.2851 161.131 33.6337C160.966 33.9779 160.809 34.322 160.667 34.6661C160.524 35.0102 160.368 35.4268 160.202 35.9158C161.191 34.4171 162.322 33.0677 163.601 31.8678C164.879 30.6724 166.176 29.7397 167.496 29.0695C168.816 28.3994 170.09 28.0553 171.327 28.0372C172.564 28.0191 173.612 28.2545 174.647 29.0424Z" fill="#AF0000"/>
<path d="M186.967 42.6127C186.843 41.7207 186.944 40.7472 187.275 39.6922C187.933 39.5292 188.613 39.185 189.317 38.6598C190.016 38.1346 190.687 37.5233 191.327 36.835C191.966 36.1468 192.531 35.4132 193.028 34.6435C193.525 33.8737 193.884 33.1719 194.109 32.5425C194.334 31.9131 194.366 31.3969 194.201 30.9894C194.035 30.5864 193.644 30.3827 193.028 30.3827C191.708 31.1117 190.536 32.0354 189.506 33.1538C188.475 34.2722 187.643 35.4857 187.004 36.8033C186.365 38.121 185.923 39.493 185.675 40.9102C185.426 42.332 185.468 43.6904 185.799 44.9899C186.374 46.5702 187.321 47.4939 188.641 47.7565C189.961 48.0191 191.34 47.7882 192.784 47.0547C195.502 45.6329 197.986 43.9711 200.23 42.0648C202.474 40.1586 204.589 38.2523 206.567 36.346C206.898 35.9792 207.247 35.6351 207.62 35.3091C207.868 35.0646 208.153 34.8427 208.485 34.639C208.691 34.5575 208.857 34.5801 208.981 34.6978C209.147 34.7793 209.165 34.9197 209.041 35.1235C209.041 35.2457 209.009 35.368 208.949 35.4902C208.885 35.6125 208.816 35.7347 208.733 35.857C206.3 38.859 203.748 41.6709 201.067 44.2881C198.386 46.9052 195.318 49.0062 191.855 50.5865C190.002 51.3155 188.167 51.7139 186.355 51.7728C184.543 51.8317 182.934 51.5374 181.536 50.8899C180.133 50.2424 179.025 49.2371 178.197 47.8788C177.374 46.5204 177.066 44.8043 177.268 42.735C177.724 39.6922 178.896 36.9618 180.791 34.5484C182.686 32.135 184.953 30.2604 187.588 28.9201C188.949 28.2319 190.37 27.7429 191.851 27.4621C193.336 27.1769 194.684 27.1361 195.898 27.3399C197.112 27.5436 198.101 28.001 198.864 28.7073C199.627 29.4182 199.968 30.4234 199.885 31.7184C199.802 33.0587 199.347 34.2948 198.524 35.4314C197.7 36.5679 196.661 37.6003 195.401 38.533C194.146 39.4658 192.775 40.2763 191.29 40.9691C189.809 41.6619 188.365 42.2097 186.967 42.6127Z" fill="#AF0000"/>
<path d="M223.743 34.4578C224.116 34.5801 224.24 34.9061 224.116 35.4314C223.992 35.9566 223.867 36.3641 223.743 36.6494C223.086 38.0712 222.299 39.6333 221.393 41.3358C220.487 43.0383 219.476 44.7454 218.363 46.4479C217.25 48.1504 216.045 49.7941 214.748 51.3789C213.451 52.9591 212.081 54.3221 210.637 55.4541C210.021 55.9023 209.39 56.2736 208.751 56.5815C208.112 56.8849 207.422 57.0796 206.682 57.1611C205.817 57.2426 205.031 57.1611 204.332 56.9166C203.633 56.6721 202.994 56.328 202.414 55.8842C201.177 54.8292 200.372 53.4708 200.004 51.8045C199.839 49.9797 199.862 47.9829 200.069 45.8095C200.276 43.6406 200.625 41.3856 201.117 39.0537C201.614 36.7218 202.253 34.3673 203.035 31.9946C203.817 29.622 204.704 27.3172 205.693 25.0849C205.035 25.1257 204.323 25.1438 203.559 25.1438C202.796 25.1438 201.922 25.1845 200.933 25.2661C200.768 25.3068 200.602 25.3249 200.437 25.3249C200.271 25.3249 200.129 25.2434 200.004 25.0804C199.922 24.9581 199.954 24.7544 200.096 24.4737C200.239 24.1884 200.46 23.9892 200.745 23.8669C201.2 23.5409 201.715 23.2692 202.29 23.0473C202.869 22.8255 203.463 22.6217 204.084 22.4406C204.7 22.2595 205.288 22.0965 205.845 21.9516C206.401 21.8112 206.907 21.6799 207.358 21.5576C208.347 19.6921 209.335 18.0485 210.324 16.6267C211.313 15.2049 212.403 13.8465 213.598 12.547C214.008 12.1802 214.445 11.8768 214.895 11.6323C215.35 11.3878 215.843 11.2293 216.381 11.1433C217.204 11.021 217.875 11.1841 218.39 11.6323C218.905 12.0806 219.121 12.6692 219.039 13.3982C218.956 13.9235 218.832 14.3944 218.666 14.7974C218.583 15.0011 218.51 15.1913 218.45 15.377C218.39 15.5581 218.317 15.7528 218.234 15.9565C217.737 16.8893 217.222 17.7813 216.689 18.6326C216.155 19.4838 215.659 20.3758 215.203 21.3086C215.576 21.3086 216.118 21.2905 216.84 21.2497C217.562 21.209 218.284 21.218 219.002 21.2814C219.724 21.3403 220.331 21.5169 220.828 21.7976C221.32 22.0829 221.508 22.5493 221.384 23.1968C221.301 23.7673 221.062 24.2518 220.671 24.6593C220.28 25.0668 219.797 25.3702 219.218 25.574C218.763 25.737 218.229 25.8185 217.613 25.8185C217.448 25.8185 217.149 25.8094 216.716 25.7868C216.284 25.7687 215.843 25.746 215.387 25.7279C214.932 25.7098 214.514 25.6872 214.118 25.669C213.727 25.6509 213.488 25.66 213.405 25.7007C212.909 26.5927 212.384 27.6885 211.828 28.988C211.271 30.2876 210.715 31.7048 210.158 33.2489C209.602 34.7929 209.064 36.4139 208.554 38.1164C208.038 39.819 207.597 41.4853 207.224 43.1063C206.852 44.7318 206.585 46.2804 206.42 47.761C206.254 49.2417 206.236 50.5503 206.36 51.6868C206.401 52.2528 206.525 52.7101 206.732 53.0542C206.939 53.3984 207.307 53.5116 207.845 53.3893C208.296 53.3078 208.71 53.1674 209.082 52.9637C209.455 52.7599 209.823 52.5154 210.195 52.2347C211.474 51.0166 212.729 49.6492 213.966 48.1278C215.203 46.6064 216.376 45.0533 217.489 43.473C218.602 41.8928 219.632 40.3487 220.579 38.85C221.527 37.3512 222.373 36.029 223.113 34.8925C223.247 34.6027 223.453 34.4578 223.743 34.4578Z" fill="#AF0000"/>
</g>
<defs>
<clipPath id="clip0_1_138">
<rect width="231" height="73" fill="white"/>
</clipPath>
</defs>
</svg>

            </a>
        </li>
        <li><a href="<?= path('commander');?>">Commander</a>  </li>
        <li><a href="<?= path('relais');?>">Point de retrait</a>  </li>
        <li><a href="<?= path('FAQ');?>">FAQ</a> </li>
        <li><a href="<?/*= path('Connexion'); */?>"> <button class="connexion_pizza"> <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg_connexion">
<path d="M10.5849 11.4152C4.73902 11.4152 0 16.1542 0 22.0001H21.1698C21.1698 16.1542 16.4308 11.4152 10.5849 11.4152Z" fill="#D2B285"/>
<path d="M16.1887 6.22654C16.1887 9.66529 13.6798 12.453 10.5849 12.453C7.49003 12.453 4.98113 9.66529 4.98113 6.22654C4.98113 2.78778 7.49003 0.00012207 10.5849 0.00012207C13.6798 0.00012207 16.1887 2.78778 16.1887 6.22654Z" fill="#D2B285"/>
</svg>
 Connexion </button> </a>  </li>
        <li><a href="<?/*= path('Panier'); */?>" > <button class="panier"> <span class="nombre_pizza">3</span> Mon Panier <span class="euro_nav">40,70e </span></button> </a> </li>
        </div>
    </ul>
</nav>
