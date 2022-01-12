<head>
    <script src="https://kit.fontawesome.com/54170d867a.js" crossorigin="anonymous" defer></script>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap'); /* font roboto */
        @import url('https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap'); /*font logo techshop */       
        
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .navbar {
            padding: 20px; padding-left: 70px; padding-right: 70px;
            background-color: white;
            display: flex;
            align-items: center;
            border-bottom: solid 2px lightgray;
            box-shadow: 3px 1px 5px;
            position: fixed;
            width: 100%;
            height: 62px;
        }

        .navbar a {
            color: black;
            font-family: Roboto;
            font-size: 19px;    
        }

        .font-icon span {
            padding-left: 10px;
    
        }

        .logo a, h3 {
            text-decoration: none;
            font-size: 28px;
            font-family: Luxurious Romam;
        }

        .logo {
            width: 100%;
            text-align: right;
        }


    </style>
</head>
<body>
    <header class="navbar">
        <div class="btn-home">
            <div class="font-icon">
            <a href="../home_page/home.php"><i class="fas fa-home"><span>INÍCIO<span></i></a>
            </div>
        </div>
        <div class="logo">
            <h3><a href="../home_page/home.php">TechShop Web</a></h3>
        </div>
    </header>
</body>