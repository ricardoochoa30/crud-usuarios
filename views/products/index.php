<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=products&m=create" class="btn btn-dark">Crear nuevo producto</a>
                          <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>PRECIO</th>
                                        <th>ENVASE</th>
                                        <th>DESCRIPCION</th>
                                        <th>LOGO</th>
                                        <th width="260">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<2;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>COCA COLA 400ML</td>
                                        <td>$ 2.600</td>
                                        <td>NO RETORNABLE</td>
                                        <td>SABOR ORIGINAL</td>
                                        <td> <img width="100px"   class="float-end" src="https://th.bing.com/th/id/R.ea4f865e6601e562e283e1ffeb25edc9?rik=3KJ%2bNSMcWZguIA&pid=ImgRaw&r=0" alt="">
                                        </div></td>
                                        <td>
                                            <a href="?c=products&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                            <a href="?c=products&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                            <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    </tr>
                                     <?php } ?>
                                    <?php for($i=2;$i<3;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>COCA COLA 350ML</td>
                                        <td>$1.800</td>
                                        <td>RETORNABLE</td>
                                        <td>SABOR ORIGIANL</td>
                                        <td> <img width="100px"   class="float-end" src="https://www.ritmostudios.be/images/Coca-Cola-Regular-20-cl-Fles.jpg" alt="">
                                        </div></td>
                                        <td>
                                            <a href="?c=products&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                            <a href="?c=products&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                            <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>      
                                    <?php for($i=3;$i<4;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>QUATRO 400ML</td>
                                        <td>$2.600</td>
                                        <td>NO RETORNABLE</td>
                                        <td>SABOR ORIGINAL</td>
                                        <td><img width="100px"   class="float-end" src="https://urbanfood.company/wp-content/uploads/2021/01/quatro-400.jpg" alt="">
                                        </div></td>
                                        <td>
                                            <a href="?c=products&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                            <a href="?c=products&m=edit" class="btn btn-sm btn-dark">Editar</a>
                                            <a href="" class="btn btn-sm btn-dark">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php for($i=4;$i<5;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>JUGO DEL VALLE 1.5L</td>
                                        <td>$3.600</td>
                                        <td>NO RETORNABLE</td>
                                        <td>SABOR MANDARINA</td>
                                        <td><img width="100px"   class="float-end" src="https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3651229-750-750/7702535020371.jpg?v=637406174130970000" alt="">
                                        </div></td>
                                        <td>
                                            <a href="?c=products&m=show" class="btn btn-sm btn-dark">Detalles</a>
                                            <a href="?c=products&m=edit" class="btn btn-sm btn-dark">Editar</a>
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