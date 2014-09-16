tweety
======
Live Version: tweety.gopagoda.com

PS: the name tweety, and the logo of the Bird is not used as a copyright infrinegment, it is<br>
merely used for the love of tweety, and it being a cute bird. The site/design is merely a construction for education
purposes and won't be used for any monetization.

(The image as well as the name is the rightful property of its respective owner and/or creator/artist)<br>
I'm not sure who they are, Cartoon Network/WB/Metro-Goldwynn (..NO idea). 

|
A Twitter Clone, designed and developed in PHP+MySQL.(A Fun Database Project)

Requires: Apache+PHP+MySQL.

and the MySQL design is as follows(can be changed inside individual files):

First, you need an Overall Database Design:
<pre>[mysql]
CREATE DATABASE tweety;
USE tweety;
[/mysql]</pre>

Inside are the Following Individual Tables along with their attributes:

<ul>
	<li>1) Users - holds the user's info.</li>
	<li>2) Ribbits - contains the actual ribbits (posts).</li>
	<li>3) Follows - the list of who follows who.</li>
	<li>4) UserAuth - the table for holding the login authentications</li>
</ul>

<pre>[mysql]
CREATE TABLE Users (
    id              INT NOT NULL AUTO_INCREMENT,
    username        VARCHAR(18) NOT NULL,
    name            VARCHAR(36),
    password        VARCHAR(64),
    created_at      DATETIME,
    email           TEXT,
    gravatar_hash   VARCHAR(32),
    PRIMARY KEY(id, username)
);
[/mysql]</pre>

<pre>[mysql]
CREATE TABLE Ribbits (
    id            INT NOT NULL AUTO_INCREMENT,
    user_id       INT NOT NULL,
    ribbit        VARCHAR(140),
    created_at    DATETIME,
    PRIMARY KEY(id, user_id)
);
[/mysql]</pre>

<pre>[mysql]
CREATE Table Follows (
    id            INT NOT NULL AUTO_INCREMENT,
    user_id       INT NOT NULL,
    followee_id   INT,
    PRIMARY KEY(id, user_id)
);
[/mysql]</pre>

<pre>[mysql]
CREATE TABLE UserAuth (
    id        INT NOT NULL AUTO_INCREMENT,
    hash      VARCHAR(52) NOT NULL,
    username  VARCHAR(18),
    PRIMARY KEY(id, hash)
);
[/mysql]</pre>

: A lot of help understanding was taken, by the tutsplus tutorial, you should seriously<br>
check it out, it's awesome.( http://code.tutsplus.com/tutorials/building-ribbit-in-php--net-28802 )
