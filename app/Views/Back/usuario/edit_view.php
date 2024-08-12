<div class="container mt-5" style="background-color: #333; color: #fff; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="p-4 shadow-lg rounded-lg" style="background-color: #fff; color: #333;">
            <h2 class="text-center mb-4">Editar Usuario</h2>
            
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('usuario/update/' . $usuario['id_usuario']); ?>" method="post">
                <?= csrf_field() ?>
                
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" value="<?= esc($usuario['nombre']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control form-control-lg" id="apellido" name="apellido" value="<?= esc($usuario['apellido']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control form-control-lg" id="usuario" name="usuario" value="<?= esc($usuario['usuario']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= esc($usuario['email']); ?>" required>
                </div>
                
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
                    <a href="<?= base_url('panel'); ?>" class="btn btn-secondary btn-lg">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
