<?php


session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['singlebutton']))
    {
        if(isset($_SESSION['product']))
        {
            $myproducts = array_column($_SESSION['product'],'product_name');
            if(in_array($_POST['product_name'], $myproducts))
            {
              echo "<script>
              window.location.href = 'table.php';
              </script>";  
            }

            else
            {
           $count = count($_SESSION['product']);
           $_SESSION['product'][$count]=array('product_name'=>$_POST['product_name'], 'category'=>$_POST['product_category'],'desc'=>$_POST['product_description'],'date'=>$_POST['on_date'],'img'=>$_POST['filebutton']);
           echo "<script>
           
           window.location.href = 'table.php';
           </script>";
            }
        }

        else
        {
            $_SESSION['product'][0]= array('product_name'=>$_POST['product_name'], 'category'=>$_POST['product_category'],'desc'=>$_POST['product_description'],'date'=>$_POST['on_date'],'img'=>$_POST['filebutton']);
            echo "<script>
            
            window.location.href = 'table.php';
            </script>"; 
        }
    }

    if(isset($_POST['remove']))

    {
        foreach($_SESSION['product'] as $key => $value)
        {
            if($value['product_name'] == $_POST['product_name'])
            {
                unset($_SESSION['product'][$key]);
                echo"<script>window.location.href='table.php';</script>;";
            }
        }
    }
}

// session_start();

// if(isset($_GET['product_name']))
// {
// echo $_GET['product_name']."<br>" ;
// }

// if(isset($_GET['op1']))
// {
// echo $_GET['op1']."<br>" ;
// }

// if(isset($_GET['op2']))
// {
// echo $_GET['op2']."<br>" ;
// }

// if(isset($_GET['product_description']))
// {
// echo $_GET['product_description']."<br>" ;
// }

// if(isset($_GET['on_date']))
// {
// echo $_GET['on_date']."<br>" ;
// }

// if(isset($_GET['filebutton']))
// {
// echo $_GET['filebutton']."<br>" ;
// }
?>