<?php 

Route::get('/test', function () {
    
    /*

return   Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator',
        'full-access' => 'yes'

    ]);

      return   Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'guest',
        'full-access' => 'no'

    ]);
    

    return   Role::create([
        'name' => 'test',
        'slug' => 'test',
        'description' => 'test',
        'full-access' => 'no'

    ]);
    */


    //$user = User::find(1);

    /*
        en: create new record
        es: crea un nuevo registro

    */ 
    //$user->roles()->attach([1,2,3]);  
    
    /*
        en: delete new record
        es: delete un nuevo registro

    */ 
    
    //$user->roles()->detach([3]);


    /*
        en: removes from the database the roles that are not in the array as well as creates those records that are not in the database.
        es: elimina de la base de datos los roles que no estén en el array asi como tambien crea aquellos registros que no estén en la base de datos.

    */ 
    //$user->roles()->sync([1,2]);

    //return $user->roles;


   /* return   Permission::create([
        'name' => 'List product',
        'slug' => 'product.index',
        'description' => 'A user can list permissions',
        

    ]);*/

    $role = Role::find(2);

    $role->permissions()->sync([1,2]);

    return $role->permissions;



});
