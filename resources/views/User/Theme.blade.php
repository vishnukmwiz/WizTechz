<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
    <style>
        input:focus-visible{
            outline:0;
        }
        select:focus-visible{
            outline:0;
        }
        .accordion-button:focus {
            box-shadow: 0 0 0 0 ;
        }
        .accordion-button:not(.collapsed) {
            box-shadow: 0 0 0 0 ; 
        }
        .breadcrumb{
            margin-bottom:2px;
        }
        .mbtn{
            color:black;
        }
        .mbtn:hover{
            color:#ffc107;
        }
        .dash {
            border: 0;
            background-color: #fff;
            border-top: 1px dashed #8c8c8c;
        }
    </style>
    <title>Wiz Techz : The Complete Tech Store</title>
</head>
<body class="bg-light">
    @yield('usercontent')
    {{View::make('User/Footer')}}
    
    <script>
        let input = document.getElementById('form-check-input')
        let button = document.getElementById('delbtn')

        button.disabled = true

        input.addEventListener("change", swapState)

        function swapState() 
        {
            if(document.getElementById('form-check-input').checked == false) 
          {
            button.disabled = false
          } else {
            button.disabled = true
          }
        }

        input.addEventListener("change", swapState)
        
            if(document.getElementById('form-check-input').checked == true) {   
            document.write("Summer radio button is selected");   
            } else {  
            document.write("Summer radio button is not selected");   
            } 
        }

        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 </body>
</html>