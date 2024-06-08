<div class="wrap__sidebar" style="z-index:1;">
    <div class="wrap__sidebar__in">
        <div style="box-shadow: 0 0 1px 0 gray;border-radius: 5px;padding:10px;display:flex; margin: 20px 0 ;">
            <div>
                <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                     style="width:50px;height:50px;object-fit: cover;object-position: center;border-radius: 50%;">
            </div>
            <div style="width:1px;margin: 0 10px;background-color: rgba(128,128,128,0.15);border-radius: 10px">
            </div>
            <div style="width: 100%">
                <div>
                    <i class="fa-solid fa-circle fa-sm" style="color: limegreen"></i>
                    <b> <?php echo $_SESSION['detail_admin']['name'];?></b>
                </div>
                <div class="wrap__logout">
                    <button onclick="window.location.href='../config/logout.php'">
                        Logout
                    </button>
                </div>
            </div>
        </div>

        <div class="wrap__menu">
            <div class="wrap__title">
                <b>MENU</b>
            </div>


<!--            <a href="#">-->
<!--                <div class="wrap__menu__item">-->
<!--                    <i class="fa-solid fa-home"></i>-->
<!--                    <span>-->
<!--                            Home-->
<!--                        </span>-->
<!--                </div>-->
<!--            </a>-->

            <a href="dashboard.php?p=menus">
                <div class="wrap__menu__item">
                    <i class="fa-solid fa-utensils"></i>
                    <span>
                            Menus
                        </span>
                </div>
            </a>

<!--            <a href="#">-->
<!--                <div class="wrap__menu__item">-->
<!--                    <i class="fa-solid fa-list-check"></i>-->
<!--                    <span>-->
<!--                            Order Online-->
<!--                        </span>-->
<!--                </div>-->
<!--            </a>-->

<!--            <a href="#">-->
<!--                <div class="wrap__menu__item">-->
<!--                    <i class="fa-solid fa-bookmark"></i>-->
<!--                    <span>-->
<!--                            Booking-->
<!--                        </span>-->
<!--                </div>-->
<!--            </a>-->
<!---->
<!--            <a href="#">-->
<!--                <div class="wrap__menu__item">-->
<!--                    <i class="fa-solid fa-martini-glass-citrus"></i>-->
<!--                    <span>-->
<!--                            Drinks-->
<!--                        </span>-->
<!--                </div>-->
<!--            </a>-->

            <a href="dashboard.php?p=gallery">
                <div class="wrap__menu__item">
                    <i class="fa-solid fa-image"></i>
                    <span>
                            Gallery
                        </span>
                </div>
            </a>

            <a href="dashboard.php?p=function">
                <div class="wrap__menu__item">
                    <i class="fa-solid fa-rocket"></i>
                    <span>
                            Function
                        </span>
                </div>
            </a>

            <a href="dashboard.php?p=vouchers">
                <div class="wrap__menu__item">
                    <i class="fa-solid fa-gifts"></i>
                    <span>
                            Vouchers
                        </span>
                </div>
            </a>


        </div>
    </div>
</div>
