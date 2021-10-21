<?php
require_once 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- file boostrap -->
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" 
    href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>
<body>
    
<?php
if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'show':
            require_once 'vscode/show.php';
            break;
        
            case 'edit':
                require_once 'vscode/edit.php';
                break;

                case 'creat':
                    require_once 'vscode/add.php';
                    break;

                    case 'delete':
                        require_once 'vscode/delete.php';
                        break;
        default:
        require_once 'vscode/show.php';
          
            break;
    }
}else {
    require_once 'vscode/show.php';

}

?>
</body>
</html>