<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

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
    /* FIM NAVBAR */
    
    /* INDEX */
    .container-index {
        background-color: #72127C;
        border-radius: 10px;
    }

    .container-index p {
        color: #f8f8f8;
    }
    /* FIM INDEX */

    /* FOOTER */
    footer {
        background-color: #F1F2F2;
    }

    .container-footer {
        /* max-width: 1200px; */
        padding: 80px 0;
    }

    .row-footer {
        display: flex;
        /* flex-wrap: wrap; */
        justify-content: space-around;
    }

    .col-footer h4 {
        font-size: 17px;
    }

    .col-footer ul {
        list-style: none;
        padding: 0;
    }
    
    .col-footer ul li {
        margin: 7px 0;
    }

    .col-footer ul li a {
        text-decoration: none;
        color: #8A05BE
    }

    .col-footer ul li a:hover {
        text-decoration: underline;
        color: #2E629D;
    }

    .row-footer-secondary {
        background-color: #2CCBB7;
        padding: 60px 0;
        text-align: center;
        bottom: 0;
        position: absolut;
        width: 100%;
    }

    .row-footer-secondary div a {
        margin: 0 10px;
    }

    .row-footer-secondary p {
        color: #313333;
    }

    .row-footer-secondary a {
        color: #f8f8f8;
        text-decoration: none
    }

    .row-footer-secondary a:hover{
        text-decoration: underline;
        color: #f8f8f8;
    }


    /* FIM FOOTER */

    /* RESPONSIVIDADE PRODUCT LIST */
    @media(max-width: 625px) {
        .central-content-list {
            width: 430px;
        }

        .btn-keep-buying {
            margin-left: 276px;
        }
    }

    /* RESPONSIVIDADE NAVBAR */
    @media(max-width:991px) {
        .navbar-container{
            padding: 5px 0px !important;
        }
    }
</style>