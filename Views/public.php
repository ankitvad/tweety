<div class="panel right"><center>
    <h1>Search Tweets</h1>
    <p>
        </p><form action="/public" method="post">
            <input name="query" type="text">
            <input type="submit" value="Search!">
        </form></center>
    <p></p>
</div>
<div id="ribbits" class="panel left">
    <h1>Public Tweets:</h1>
        <?php foreach($ribbits as $ribbit){ ?>
            <div class="ribbitWrapper">
                <img class="avatar"src="/Resource/obj/tweety.png" height=48px width=31px>
                <span class="name"><?php echo $ribbit->name; ?></span> @<?php echo $ribbit->username; ?>
                <span class="time">
                <?php
                    $timeSince = time() - strtotime($ribbit->created_at);
                    if($timeSince < 60)
                    {
                        echo $timeSince . "s";
                    }
                    else if($timeSince < 3600)
                    {
                        echo floor($timeSince / 60) . "m";
                    }
                    else if($timeSince < 86400)
                    {
                        echo floor($timeSince / 3600) . "h";
                    }
                    else{
                        echo floor($timeSince / 86400) . "d";
                    }
                ?>
                </span>
                <p><?php echo $ribbit->ribbit; ?></p>
            </div>
        <?php } ?>
</div>