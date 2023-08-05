<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=companies&m=create" class="btn btn-dark">Crear nuevo compañia</a>
                          <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>NIT</th>
                                        <th>DIRECCION</th>
                                        <th>TELEFONO</th>
                                        <th>LOGO</th>
                                        <th width="260">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<2;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Coca Cola</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td><img width="100px"   class="float-end" src="https://th.bing.com/th/id/OIP.klzqFJtsMxCkZojfDjbP7gHaEK?pid=ImgDet&rs=1" alt=""></td>
                                        <td>
                                             <a href="?c=companies&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                             <a href="?c=companies&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                             <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    <?php } ?>
                                    <?php for($i=2;$i<3;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Postobon</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td><img width="100px"   class="float-end" src="https://th.bing.com/th/id/R.b27607cba8df2c672f4441b7a30a0f06?rik=CWz%2fh7%2fTb7c8xg&riu=http%3a%2f%2fs3.amazonaws.com%2fs3.timetoast.com%2fpublic%2fuploads%2fphotos%2f8050030%2flogo-postobon-2150880792.jpg%3f1478304752&ehk=7bURgzqe2xuo%2f1Hh07ubQkUWBkRHTFLfpKd7%2fTyB7QA%3d&risl=&pid=ImgRaw&r=0" alt=""></td>
                                        <td>
                                             <a href="?c=companies&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                             <a href="?c=companies&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                             <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    <?php } ?>
                                    <?php for($i=3;$i<4;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Nestle</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td><img width="100px"   class="float-end" src="https://th.bing.com/th/id/R.f188e024ba9d3ec4ff43d571c0bdcfe8?rik=9XYxUP%2bhF54b5w&pid=ImgRaw&r=0" alt=""></td>
                                        <td>
                                       
                                             <a href="?c=companies&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                             <a href="?c=companies&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                             <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    <?php } ?>
                                    <?php for($i=2;$i<3;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Guinnell</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td><img width="100px"   class="float-end" src="https://cdn.shopify.com/s/files/1/0629/4644/3514/files/GUINNELL_1100x.png?v=1644890129" alt=""></td>
                                        <td>
                                        
                                             <a href="?c=companies&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                             <a href="?c=companies&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                             <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
                          <nav aria-label="Page navigation example">
                          <ul class="pagination">
    <li class="page-item"><a class="btn btn-sm btn-dark mt-2" class="page-link"  href="#">Previous</a></li>
    <li class="page-item"><a class="btn btn-sm btn-dark  mt-2" class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="btn btn-sm btn-dark mt-2" class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="btn btn-sm btn-dark mt-2" class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="btn btn-sm btn-dark mt-2" class="page-link" href="#">Next</a></li>
  </ul>
</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>