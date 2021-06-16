<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="modalGenFactura" class="modal fade bs-modal-genFactura show" tabindex="-1" aria-labelledby="#modalGenFacturaLabel" style="display: none; padding-right: 16px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modalGenFacturaLabel">Fullscreen Modal Heading</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id='viewer' style='width: 1024px; height: 600px; margin: 0 auto;'>
                    
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<script>
    WebViewer({
        path: '/assets/libs/pdfJsExpress/lib', // path to the PDF.js Express'lib' folder on your server
        initialDoc: 'https://pdftron.s3.amazonaws.com/downloads/pl/webviewer-demo.pdf',
        // initialDoc: '/path/to/my/file.pdf',  // You can also use documents on your server
    }, document.getElementById('viewer'))
            .then(instance => {
                const docViewer = instance.docViewer;
                const annotManager = instance.annotManager;
                // call methods from instance, docViewer and annotManager as needed

                // you can also access major namespaces from the instance as follows:
                // const Tools = instance.Tools;
                // const Annotations = instance.Annotations;

                docViewer.on('documentLoaded', () => {
                    // call methods relating to the loaded document
                });
            });
</script>