<template>
    <div class="row mar_leftcss">
			<div class="col-md-12">
				<section>
					<div class="s-FlexContainer s-FlexContainer--centered u-vspace-1">
						<label for="" class="s-FormLabel s-FormLabel--inline width-100">
						Date range
						</label>
						<div id="select_id" class="select-view">
							<div class="s-FormSelectContainer">
								<select id="select_id01" tabindex="0" class="x-select">
									<option id="select_option1" value="7" class="ember-view x-option">Last 7 days</option>
									<option id="select_option2" value="30" class="ember-view x-option">Last 30 days</option>
									<option id="select_option3" value="60" class="ember-view x-option">Last 60 days</option>
									<option id="select_option4" value="CUSTOM" class="ember-view x-option">Custom</option>
								</select>
							</div>
						</div>
						<article class="padding-l-xs show_custonrange">
							<input type="text" name="daterange" value="" placeholder="select" class="daterangepickercss" />
						</article>
					</div>
				</section>
			</div>
		</div>
		<div class="row mar_leftcss">
			<div class="col-md-4">
				<a href="dashboard-orders.php" class="box_cssa">
					<div class="box_css box_css01">
						<img src="image/dashboard_01.png">
						<div class="content_rightcss">
							<p class="p_firstcss">Today's Orders</p>
							<span class="price_firstcss">0</span>
							<p class="total_firstcss">Total Orders : 0</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="javascript: void(0)" class="box_cssa">
					<div class="box_css box_css02">
						<img src="image/dashboard_02.png">
						<div class="content_rightcss">
							<p class="p_firstcss">Balance Amount</p>
							<span class="price_firstcss">0</span>
							<span class="btn_recharge" data-toggle="modal" data-target="#exampleModal02">Recharge Now</span>
							<!-- <p class="total_firstcss">Total Amount : 0</p> -->
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="box_cssa">
					<div class="box_css box_css03">
						<img src="image/dashboard_03.png">
						<div class="content_rightcss">
							<p class="p_firstcss">Average Shipping Cost</p>
							<span class="price_firstcss">0</span>
							<p class="total_firstcss">Total Cost : 0</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row mar_leftcss">
			<div class="col-md-12">
				<div class="card_css">
					<div>
						<h3 class="head_title">Shipment Details</h3>
					</div>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<div class="rating_boxall">
								<div class="rating-box">
									<div class="progress progress1" data-percentage="100">
										<span class="progress-left">
										<span class="progress-bar color_01"></span>
										</span>
										<span class="progress-right">
										<span class="progress-bar color_01"></span>
										</span>
										<div class="progress-value">
											<div>
												150
											</div>
										</div>
									</div>
									<span class="text-black pl-sm new_roundhead">Total Shipment</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<br>
							<div class="rating_boxall">
								<div class="rating-box">
									<div class="progress" data-percentage="100">
										<span class="progress-left">
										<span class="progress-bar color_02"></span>
										</span>
										<span class="progress-right">
										<span class="progress-bar color_02"></span>
										</span>
										<div class="progress-value">
											<div>
												60
											</div>
										</div>
									</div>
									<span class="text-black pl-sm">Ready For Pickup</span>
								</div>
								<div class="rating-box">
									<div class="progress" data-percentage="100">
										<span class="progress-left">
										<span class="progress-bar color_04"></span>
										</span>
										<span class="progress-right">
										<span class="progress-bar color_04"></span>
										</span>
										<div class="progress-value">
											<div>
												50
											</div>
										</div>
									</div>
									<span class="text-black pl-sm">In Transit</span>
								</div>
								<div class="rating-box">
									<div class="progress" data-percentage="100">
										<span class="progress-left">
										<span class="progress-bar color_03"></span>
										</span>
										<span class="progress-right">
										<span class="progress-bar color_03"></span>
										</span>
										<div class="progress-value">
											<div>
												40
											</div>
										</div>
									</div>
									<span class="text-black pl-sm">Delivered</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</template>
<style scoped>
	.mar_leftcss {
		margin-left: 200px;
		margin-top: 20px;
		margin-right: 0;
	}
</style>
<script>
export default {
    name:"dashboard",
    data(){
        return {
            user:this.$store.state.auth.user
        }
    }
}
</script>