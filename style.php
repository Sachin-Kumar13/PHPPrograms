<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

* {
    box-sizing: border-box;
    padding: 0px;
    margin: 0px;
}

body {
    font-family: arial;
    display: flex;
    flex-direction: column;
    margin: 0px;
}

header {
    /*            position: fixed;*/
    /*            width: 100%;*/
    background-color: #537153;
    display: flex;
    align-items: center;
    padding: 15px 0;
}

header a {
    color: white;
}

header ul {
    list-style: none;
    display: flex;
}

#logo {
    margin: 0 auto;
    font-size: 30px;
}

a {
    text-decoration: none;
}

#menu ul {
    margin-left: 20px;
}

#menu li {
    padding: 10px;

}

#social-link ul {
    margin-right: 20px;
}

#social-link li {
    padding: 10px;
}

.services-container {

    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.service-box {
    border: 1px solid #eee;
    padding: 10px;
    flex-basis: 32%;
    max-width: 370px;
    display: flex;
    flex-direction: column;

}

.service-box img {
    width: 100%;
    max-height: 180px;
}

.main {
    /*            margin-top: 60px;*/
    display: flex;

}

aside {
    flex: 0 0 20vw;
    background-color: beige;
    padding: 10px;
}

aside img {
    width: 100%;
    height: 310px;
    margin-top: 10px;
}

aside ul {
    list-style: none;
    padding: 0px;
    text-align: center;
}

aside ul a {
    color: #537153;
    padding: 10px;
    display: block;
    border-bottom: 1px solid #537153;


}

artical {
    padding: 10px;
}

footer {
    background-color: #537153;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 20px
}

.call-to-action {
    margin-top: 5px;
    align-self: flex-start;
    margin-top: auto;
}

.call-to-action a {
    text-decoration: none;
    background-color: grey;
    color: white;
    padding: 8px 13px;
}

.call-to-action a:hover {
    background: transparent;
    color: grey;
    border: 1px solid grey;
}


@media screen and (max-width:850px) {
    aside {
        flex: 0 0 30vw;
    }

    .service-box {
        border: 1px solid #eee;
        padding: 10px;
        flex-basis: 48%;


    }

    aside img {
        height: 250px;
    }
}

@media screen and (max-width:600px) {
    header {
        flex-direction: column;

    }

    #logo {
        order: -1;
    }

    artical {
        order: -1
    }

    .main {

        flex-direction: column;
    }

    .services-container {
        flex-direction: column;
    }

    aside img {
        display:none;
    }
}

h2 {
    text-align: center;
}

</style>

</head>
<body>
    
</body>
</html>