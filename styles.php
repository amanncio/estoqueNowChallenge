<style>
    /* CORES PARA USAR NO DESIGN 
        Verde #00C850
        Roxo para :hover #A004DC
        Roxo Pricipal #72127C
    */

    body {
        background-color: #7D83A5!important;
    }

    h2 {
        color: #f8f8f8;
    }


    .container {
        display: flex;
        justify-content: center;
        min-height: 100vh;
        align-items: center;
        padding: 50px;
    }

    .central-content-add {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #3f4055d7;
        padding: 65px;
        border-radius: 4px;
    }
    td, tr{
        color:#f8f8f8cb
    }

    .btn-success {
        /* background-color: #00C850 !important; */
    }

    .central-content-list {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #3f4055d7;
        /* border: 1px solid #000; */
        border-radius: 8px;
        padding: 25px 0;
    }

    .view-table {
        padding: 35px 90px;
    }

    .btn-keep-buying {
        margin-left: 450px;
    }

    label {
        color: #f8f8f8 !important;
    }

    .required {
        color: red;
        margin-left: 3px;
        color:
    }
    
    #discountSelect {
        width: 133px;
        height: 31px;
    }

    .btn-set-discount {
        padding: 0 10px !important;
    }

    .total-values {
        color: #f8f8f8cb;
    }

    .span-total-values {
        color: yellow;
    }

    /* NAVBAR */
    .navbar-toggler-icon {
        font-size: 15px !important;
    }

    .nav-link {
        font-size: 14px !important;
        margin-left: 15px;
    }

    .navbar-container{
        margin: 0 auto !important;
        padding: 5px 50px !important;
    }

    .container-index {
        background-color: #72127C;
        border-radius: 10px;
    }

    .container-index p {
        color: #f8f8f8;
    }

    /* RESPONSIVIDADE PRODUCT LIST */
    @media(max-width: 625px) {
        .central-content-list {
            width: 430px;
        }

        .btn-keep-buying {
            margin-left: 276px;
        }
    }

    @media(max-width: 468px) {
        /* .central-content-list {
            width: 430px;
        }

        .btn-keep-buying {
            margin-left: 276px;
        } */
        
        .btn-danger {
            /* display: block !important; */
        }
    }

</style>