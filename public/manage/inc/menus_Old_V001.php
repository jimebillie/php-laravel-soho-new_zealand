<style>
    .wrap__nav{
        background-color: yellow;
    }
    .wrap__hams .items{
        background-color: #343434;
    }


    .wrap__content_topic{
        min-height: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    h1{
        filter: drop-shadow(0 0 5px gray);
    }
    .wrap__content_topic h3{
        font-weight: bold;
        margin: 25px 0;
        cursor: pointer;
        position: relative;
        filter: drop-shadow(0 0 5px gray);
    }
    .wrap__content_topic h3:before{
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 25%;
        min-height: 3px;
        border-radius: 10px;
        background-color: white;
        content: '';
        transition: 0.4s;
    }
    .wrap__content_topic h3:hover:before {
        width: 100%;
    }
    .TopicName {
        filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.75));
    }
</style>
<div class="container container__wrap">
        <h1 class="text-center TopicName" style="font-weight: bold">
            MENUS
        </h1>
        <div class="wrap__content_topic">
            <h3 onclick="window.location.href='index.php?p=alldaymenu'">
                ALL DAY MENU
            </h3>
            <h3 onclick="window.location.href='index.php?p=cocktailmenu'">
                COCKTAIL MENU
            </h3>
        </div>

</div>
