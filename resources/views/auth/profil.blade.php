<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container bootstrap snippets bootdey">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4">
                <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
                <ul title="Ratings" class="list-inline ratings text-center">
                    <li><a href="#"><span class="fa fa-star"></span></a></li>
                    <li><a href="#"><span class="fa fa-star"></span></a></li>
                    <li><a href="#"><span class="fa fa-star"></span></a></li>
                    <li><a href="#"><span class="fa fa-star"></span></a></li>
                    <li><a href="#"><span class="fa fa-star"></span></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <strong>Information</strong><br>
                <div class="table-responsive">
                <table class="table table-user-information">
                    <tbody>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-asterisk text-primary"></span>
                                    Prénom                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->firstname }}     
                            </td>
                        </tr>
                        <tr>    
                            <td>
                                <strong>
                                    <span class="fa fa-user text-primary"></span>    
                                    Nom                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->name }}     
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-cloud text-primary"></span>  
                                    Classe                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->class }}  
                            </td>
                        </tr>

                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-bookmark text-primary"></span> 
                                    Niveau                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                Licence 
                            </td>
                        </tr>


                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-eye text-primary"></span> 
                                    Téléphone                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->number }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-envelope text-primary"></span> 
                                    Email                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                            {{ $user->email }}   
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-calendar text-primary"></span>
                                    Date de Création                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->created_at }} 
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="fa fa-calendar text-primary"></span>
                                        Modifié le                                             
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->updated_at }}
                            </td>
                        </tr>                                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
