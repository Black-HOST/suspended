<?php
/*
 * AdminAreaFooterOutput
 *
 * WHMCS hook controller for the AdminAreaFooterOutput event
 * Outputs HTML at the end of the html body in WHMCS administration area
 *
 * @docs        https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/hooks/adminareafooteroutput.php
*/
	namespace SUSPENDED\Hooks;

class AdminAreaFooterOutput
{
	function __invoke (): ?string
	{
		global $domain_data;

		if( !isset( $domain_data ))
			return null;

		return <<<HTML
			<div class="modal fade" id="modalSuspend" role="dialog" aria-labelledby="SuspendLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content panel panel-primary">
						<div id="modalSuspendHeading" class="modal-header panel-heading">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="SuspendLabel">Domain suspension</h4>
						</div>
						<div id="modalSuspendBody" class="modal-body panel-body">
							The domain and its subdomains will resolve to a suspended landing page once the DNS changes propagate. <br> <br>
							Are you sure you want to suspend: <b>{$domain_data['domain']}</b>?
						</div>
						<div id="modalSuspendFooter" class="modal-footer panel-footer">
							<button type="button" id="Suspend-Yes" class="btn btn-primary" onclick="suspend();">Yes</button>
							<button type="button" id="Suspend-No" class="btn btn-default" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
			<script>
				$ = jQuery;

				$('.button[data-target="#modalRenew"]').after(`<input type="button" class="button btn btn-danger" id="suspend-domain" data-toggle="modal" data-target="#modalSuspend" style="margin-left:5px;" value="Suspend">`);

				function suspend () 
				{
					var form = $('.button[data-target="#modalRenew"]').closest("form");

					// find input ns1, ns2 and add value
					$('input[name="ns1"]').val("ns1.suspended.page");
					$('input[name="ns2"]').val("ns2.suspended.page");
					
					// find Status select and change option to 'Fraud'
					$('select[name="status"]').val('Fraud');

					// Fire the form
					form.submit();
				};


			</script>
		HTML;
	}
}
