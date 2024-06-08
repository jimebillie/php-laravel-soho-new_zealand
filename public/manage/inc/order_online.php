<style>
    .wrap__nav {
        background-color: yellow;
    }

    .wrap__hams .items {
        background-color: #343434;
    }

    .wrap__menu__order__online {
        background-color: rgba(0, 0, 0, 0.48);
        color: white;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .wrap__menu__order__online label {
        margin-right: 10px;
        margin-bottom: 0;
        font-weight: bold;
        cursor: pointer;
        position: relative;
    }

    .wrap__menu__order__online label:before {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0;
        min-height: 2px;
        background-color: white;
        transition: 0.2s;
    }

    .wrap__menu__order__online label:hover:before {
        width: 100%;
    }

    .wrap__menu__order__online .active:before {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 100%;
        min-height: 2px;
        background-color: white;
        transition: 0.2s;
    }

    @media screen and (max-width: 768px) {
        .wrap__menu__order__online label {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    }

    .WrapCardImg {
        overflow: hidden;
        border-radius: 20px;
        filter: drop-shadow(0 1px 5px rgba(0, 0, 0, 0.75));
        position: relative;
    }

    .WrapCardImg img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: center;
        transition: 0.3s;
    }

    .WrapCardImg img:hover {
        transform: scale(1.05);
    }

    .BtnAddInImg {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #ff253a;
        color: white;
        margin: 20px;
        padding: 5px 13px;
        border-radius: 50%;
        font-weight: bold;
        filter: drop-shadow(0 1px 5px rgba(0, 0, 0, 0.75));
        cursor: pointer;
    }

    .BtnPrice {
        background-color: rgb(255, 37, 58);
        color: yellow;
        width: 100%;
        text-align: center;
        font-weight: bold;
        filter: drop-shadow(0 1px 5px rgba(0, 0, 0, 0.75));
    }
    .BtnPrice:hover {
        background-color: rgba(255, 37, 58, 0.62);
        transition: 0.3s;
    }

    .WrapNameMenuInCard {
        overflow: hidden;
        white-space: nowrap;
        display: flex;
        align-items: center;
        color: yellow;
    }
    .WrapDetailInCard{
        height: 50px;
        overflow:hidden;
    }

</style>

<div class="container container__wrap">
    <div class="wrap__menu__order__online">
        <?php
        foreach (range(1, 7) as $rang) {
            ?>
            <label class="<?php if ($rang == 1) {
                echo "active";
            } ?>" onclick="window.location.href='#'">NAME<?= $rang ?></label>
            <?php
        }
        ?>
    </div>

    <div class="row my-4">
        <?php
        foreach (range(1, 6) as $AsCardMenu) {
            ?>
            <div class="col-md-6 mb-5">
                <div class="WrapCardImg">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                    <div class="BtnAddInImg" onclick="window.location.href='#'">
                        +
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col WrapNameMenuInCard">
                        <div title="<?= 'Lorem ipsum dolor sit amet, consectetur adipisicing adipisicing adipisicing' ?>">
                            <?= "Lorem ipsum dolor sit amet, consectetur adipisicing adipisicing adipisicing " ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn BtnPrice">
                            $99.9
                        </div>
                    </div>
                </div>

                <div class="WrapDetailInCard" title="<?='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, esse obcaecati. Ad aliquid cumque dolorum ea enim ipsum iste iusto magni minima nam obcaecati perferendis quae quaerat quasi quia quibusdam quidem quo recusandae rem repellendus, repudiandae saepe sapiente similique suscipit tempore ullam veniam vero. Asperiores aut autem laudantium nulla quas?'?>">
                    <?=mb_strimwidth('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, esse obcaecati. Ad aliquid cumque dolorum ea enim ipsum iste iusto magni minima nam obcaecati perferendis quae quaerat quasi quia quibusdam quidem quo recusandae rem repellendus, repudiandae saepe sapiente similique suscipit tempore ullam veniam vero. Asperiores aut autem laudantium nulla quas?',0,95,'...')?>
                </div>

            </div>
            <?php
        }
        ?>

    </div>


</div>

