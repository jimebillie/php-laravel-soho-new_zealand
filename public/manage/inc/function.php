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
    .WrapCardOut{
        border: 1px solid yellow;
    }
    .WrapGardImg img{
        width: 100%;
        object-position: center;
        object-fit: cover;
        height: 200px;
    }
    .WrapGardDetail{
        padding: 30px 20px;
    }
    .WarpBtn{
        text-align: center;
        background-color: yellow;
        padding: 10px 0 ;
        color: #252525;
        cursor: pointer;
        font-weight: bold;
    }
</style>
<div class="container container__wrap">
    <div class="d-flex">
        <h3 class="TopicName" style="font-weight: bold">
            FUNCTION
        </h3>
    </div>

    <div class="row">
        <?php
        foreach (range(1, 6) as $as_range) {
            ?>
            <div class="col-md-4 my-3">
                <div class="WrapCardOut">
                    <div class="WrapGardImg">
                        <img src="https://images.unsplash.com/photo-1543353071-10c8ba85a904?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                    </div>
                    <div class="WrapGardDetail">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quia?
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



