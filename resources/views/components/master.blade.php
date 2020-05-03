<head>
    <title>File Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    .cs-alert {
        width: 60%;
        margin: 5px;
        position: absolute !important;
        top: 0;
        right: 0;
        z-index: 100;
    }
    .is-success {
        background-color: #48c774;
        color: #fff;
    }
    .notification {
        border-radius: 4px;
        padding: 1.25rem 2.5rem 1.25rem 1.5rem;
        position: relative;
    }
    .notification>.delete {
        position: absolute;
        right: .5rem;
        top: .5rem;
    }
    .delete {
        -webkit-appearance: none;
        background-color: rgba(10,10,10,.2);
        border: none;
        border-radius: 290486px;
        cursor: pointer;
        pointer-events: auto;
        display: inline-block;
        flex-grow: 0;
        flex-shrink: 0;
        font-size: 0;
        height: 20px;
        max-height: 20px;
        max-width: 20px;
        min-height: 20px;
        min-width: 20px;
        outline: 0;
        position: relative;
        vertical-align: top;
        width: 20px;
    }
    .delete::before {
        height: 2px;
        width: 50%;
    }
    .delete::after {
        height: 50%;
        width: 2px;
    }
    .delete::after, .delete::before {
        background-color: #fff;
        content: "";
        display: block;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translateX(-50%) translateY(-50%) rotate(45deg);
        transform-origin: center center;
    }
    .cs-p-1 {
        padding-bottom: .5rem;
        padding-top: .5rem;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>