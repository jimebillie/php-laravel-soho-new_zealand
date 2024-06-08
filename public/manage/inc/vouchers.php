<style>
    .wrap__nav {
        background-color: yellow;
    }

    .wrap__hams .items {
        background-color: #343434;
    }

    .TopicName {
        position: relative;
        filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.75));
    }

    .TopicName:before {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 100%;
        height: 3px;
        background-color: white;
    }

    .WrapCardOut {
        border: 1px solid yellow;
    }

    .WrapGardImg{
        overflow: hidden;
    }

    .WrapGardImg img {
        width: 100%;
        object-position: center;
        object-fit: cover;
        height: 200px;
        transition: 0.3s;
    }
    .WrapGardImg img:hover{
        transform: scale(1.03);
    }

    .WrapGardDetail {
        padding: 30px 20px;
    }

    .WarpBtn {
        text-align: center;
        background-color: yellow;
        padding: 10px 0;
        color: #252525;
        cursor: pointer;
        font-weight: bold;
    }
</style>
<div class="container container__wrap">
    <div class="d-flex">
        <h3 class="TopicName" style="font-weight: bold">
            VOUCHERS
        </h3>
    </div>

    <div class="row">
        <?php
        $img = [
            "img1" => "https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29ja3RhaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            , "img2" => "https://images.unsplash.com/photo-1609951651556-5334e2706168?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y29ja3RhaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            , "img3" => "https://images.unsplash.com/photo-1541532713592-79a0317b6b77?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGFydHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            , "img4" => "https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBhcnR5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            , "img5" => "https://media.istockphoto.com/id/1386004014/photo/little-girl-blowing-her-birthday-candle.jpg?b=1&s=170667a&w=0&k=20&c=Q5cpOgFlF5AD2ajLnDG-zOm3bpsCpA-OVuzq5Kl8oOU="
            , "img6" => "https://images.unsplash.com/photo-1528495612343-9ca9f4a4de28?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHBhcnR5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
        ];
        foreach (range(1, 6) as $as_range) {
            ?>
            <div class="col-md-4 my-3">
                <div class="WrapCardOut">
                    <div class="WrapGardImg">
                        <img src="<?= $img['img' . $as_range] ?>" alt="">
                    </div>
                    <div class="WrapGardDetail">
                        <div class="mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quia?
                        </div>

                        <span>
                            <b>
                            $35.5
                            </b>
                        </span>
                    </div>
                    <div class="WarpBtn">
                        Read More
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

</div>



