
<html>
    <head>
        <link rel="stylesheet" href="dreid.css">
        <script type="text/javascript" src="history.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="js/tempdlates.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#" id="contacts">Contacts</a></li>
                    <li><a href="#" id="portfolio">Portfolio</a></li>
                </ul>
            </div>
            <div id="content">

            </div>
            <div id="footer">
                WEBDESIGN ©

            </div>
            
        </div>
    </body>
    <script language="javascript">
        $(document).ready(function(){       
            switch(localStorage.lastpage){
                case 'portfolio':
                    $('#content').fadeIn('slow', function(){
                        $('#content').load('portfolio.php')
                    });
                    localStorage.lastpage="portfolio";
                    break;
                case 'contacts':
                    $('#content').load('contacts.php',function(){
                      $('#content').fadeIn('slow')  
                    });
                    localStorage.lastpage="contacts";
                    break;
                default:
                    localStorage.lastpage = null;
                    break;
            }
          //  alert(localStorage.lastpage);

            $('#contacts').click(function(){
                $('#content').load('contacts.php');
                localStorage.lastpage="contacts";
            })
            $('#portfolio').click(function(){
                $('#content').load('portfolio.php');
                localStorage.lastpage="portfolio";
            })
           
        })
        
    </script>
</html>