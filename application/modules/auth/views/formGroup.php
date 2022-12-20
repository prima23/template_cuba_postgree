<?php echo form_open('auth/signin/login', array('id' => 'formLogin', 'novalidate' => '')); ?>
<?php echo form_hidden('authorization', $this->encryption->encrypt('group')); ?>
<?php echo $this->session->flashdata('message'); ?>
<div id="errLog"></div>
<div class="alert alert-success" role="alert">
  <strong>Informasi!</strong>
  <p class="mb-0">Anda memiliki <strong><?php echo isset($multi_group) ? count($multi_group) . ' (' . terbilang(count($multi_group)) . ')' : ''; ?></strong> group untuk bisa login, pilih salah satu untuk lanjut </p>
</div>
<div class="form-group">
  <div class="row">
    <?php $i = 1;
    foreach ($multi_group as $key => $g) : ?>
      <div class="col-6">
        <div class="custom-control custom-radio required mb-2">
          <input type="radio" class="custom-control-input" name="groupid" id="<?php echo 'groupid_' . $i; ?>" value="<?php echo $this->encryption->encrypt($g['id_group']); ?>" required>
          <label class="custom-control-label" for="<?php echo 'groupid_' . $i; ?>"><?php echo $g['nama_group']; ?></label>
        </div>
      </div>
    <?php $i++;
    endforeach; ?>
  </div>
</div>
<button class="btn btn-primary btn-block mb-4" type="submit" name="submit" id="submit">MASUK</button>
<?php echo form_close(); ?>