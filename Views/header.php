<!DOCTYPE html>
<html>
    <head>
    	
        <link rel="stylesheet/less" href="/Resource/style.less">
        <script src="/Resource/less.js"></script>
    </head>
    <body>
        <header>
            <div class="wrapper">
        <img src="/Resource/obj/tweety.png" height=48px width=31px>
            <img src="/Resource/obj/logo.png">
            <span>{ A Twitter Clone }</span>
            
                            <?php if($User !== false){ ?>
                   <center> <nav>
                        <span><a href="/buddies">Your Buddies</a></span>
                        <span><a href="/public">Public Tweets</a></span>
                        <span><a href="/profiles">Profiles</a></span>
                    </nav></center>
                    <form action="/logout" method="get">
                        <input type="submit" id="btnLogOut" value="Log Out">
                    </form></span>
               
                <?php }else{ ?>
                    <form method="post" action="/login">
                        <input name="username" type="text" placeholder="username">
                        <input name="password" type="password" placeholder="password">
                        <input type="submit" id="btnLogIn" value="Log In">
                    </form><br><br><hr width="800">
                <?php } ?>
            </div>
        </header>
        <br><br>
        <div id="content">
            <div class="wrapper">