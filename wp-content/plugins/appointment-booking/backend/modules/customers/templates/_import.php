<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div id="bookly-import-customers-dialog" class="modal fade" tabindex=-1 role="dialog">
    <div class="modal-dialog">
        <form enctype="multipart/form-data" action="<?php echo \Bookly\Lib\Utils\Common::escAdminUrl( \Bookly\Backend\Modules\Customers\Controller::page_slug ) ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    <div class="modal-title h2"><?php _e( 'Import', 'bookly' ) ?></div>
                </div>
                <div class="modal-body">
                    <h4><?php _e( 'Note', 'bookly' ) ?></h4>
                    <p>
                        <?php printf( __( 'You may import list of clients in CSV format. The file needs to have four columns: Name, Phone, Email and Date of birth (see <a href="%s" target="_blank">format</a>).', 'bookly' ), 'http://php.net/manual/en/datetime.formats.date.php' ) ?>
                    </p>
                    <div class="form-group">
                        <label for="import_customers_file"><?php _e( 'Select file', 'bookly' ) ?></label>
                        <input name="import_customers_file" id="import_customers_file" type="file">
                    </div>
                    <div class="form-group">
                        <label for="import_customers_delimiter"><?php _e( 'Delimiter', 'bookly' ) ?></label>
                        <select name="import_customers_delimiter" id="import_customers_delimiter" class="form-control">
                            <option value=","><?php _e( 'Comma (,)', 'bookly' ) ?></option>
                            <option value=";"><?php _e( 'Semicolon (;)', 'bookly' ) ?></option>
                        </select>
                    </div>
                    <input type="hidden" name="import">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-lg btn-success" name="import-customers">
                        <?php _e( 'Import', 'bookly' ) ?>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>