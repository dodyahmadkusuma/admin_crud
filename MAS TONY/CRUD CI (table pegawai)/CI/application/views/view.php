<table>
    <?php foreach($data_pegawai as $pegawai) { ?>
        <tr>
            <td>
            <a href="<?php echo base_url('pegawai/detail/' . $pegawai->id_pegawai) ?>">
                <?php echo $pegawai->nama ?>
            </a>
            </td>
        </tr>
    <?php } ?>
</table>