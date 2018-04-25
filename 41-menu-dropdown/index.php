<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>jQuery</title>
        <style text="text/css">
            body {margin:0}
            .menu {
                height: 40px;
                background-color: #000;
                color: #FFF
            }
            ul {margin:0;padding:0;list-style:none}
            li {float:left;padding:0px 20px;line-height:40px;cursor:pointer}
            .menu1 {
                height: 40px;
            }
            .menu2 {
                position: absolute;
                width: 150px;
                height: 120px;
                background-color: #000;
                display: none
            }
        </style>
    </head>
    <body>
        <div class="menu">
            <ul>
                <li>
                    <div class="menu1">Home</div>
                    <div class="menu2">
                        Opção 1 <br>
                        Opção 2 <br>
                        Opção 3
                    </div>
                </li>
                <li>Menu 1</li>
                <li>
                    <div class="menu1">Menu 2</div>
                    <div class="menu2">
                        Opção 1 <br>
                        Opção 2 <br>
                        Opção 3
                    </div>
                </li>
                <li>
                    <div class="menu1">Menu 3</div>
                    <div class="menu2">
                        Opção 1 <br>
                        Opção 2 <br>
                        Opção 3
                    </div>
                </li>
                <li>Menu 4</li>
            </ul>
        </div>

        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
