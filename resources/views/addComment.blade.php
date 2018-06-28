@extends('layouts.comments')
<td id="TD_1">
	<script type="text/javascript" id="SCRIPT_2"><!--

google_ad_client = "pub-5636963752834926";

google_ad_width = 234;

google_ad_height = 60;

google_ad_format = "234x60_as";

google_ad_type = "text_image";

//2007-01-24: PostComents_234x60

google_ad_channel = "2966399574";

google_color_border = "8AADE1";

google_color_bg = "EBF1FA";

google_color_link = "000099";

google_color_text = "666666";

google_color_url = "0066CC";

//-->
	</script>
	<br id="BR_4" /><br id="BR_5" />
	<form id="FORM_6" name="farum" action="{{url('/saveComment')}}" method="post">
		{{ csrf_field() }}
				<table id="TABLE_7">
					<tbody id="TBODY_8">
						<tr id="TR_9">
							<td colspan="3" id="TD_10">
								<span id="SPAN_11">Post your opinion about</span> Samsung Galaxy A6
							</td>
						</tr>
						<tr id="TR_12">
							<td id="TD_13">
								<span id="SPAN_14"></span>
							</td>
							<td id="TD_15">
								Name
								<br>
								<input type="text" name="name" > 
							</td>
							<td id="TD_16">
							</td>
						</tr>
						<tr id="TR_17">
							<td id="TD_18">
							</td>
							
							<td id="TD_21">
							</td>
						</tr>
						<tr id="TR_22">
							<td id="TD_23">
							</td>
							
							<td id="TD_25">
							</td>
						</tr>
						<tr id="TR_26">
							<td id="TD_27">
							</td>
							<td id="TD_28">
								E-mail
								<br>
								<input name="email" type="text" id="INPUT_29" size="30" />
							</td>
							<td id="TD_30">
							</td>
						</tr>
						<tr id="TR_31">
							<td id="TD_32">
							</td>
							<td id="TD_33">
								<hr id="HR_34" />
							</td>
							<td id="TD_35">
							</td>
						</tr>
						<tr id="TR_36">
							<td id="TD_37">
							</td>
							<td id="TD_38">
								<span id="SPAN_39">Your Opinion Here about Samsung Galaxy A6</span>
							</td>
							<td id="TD_40">
							</td>
						</tr>
						<tr id="TR_41">
							<td id="TD_42">
							</td>
							<td id="TD_43">
								<textarea name="comment" cols="45" rows="7" id="TEXTAREA_44">
								</textarea>
							</td>
							<td id="TD_45">
							</td>
						</tr>
						<tr id="TR_46">
							<td id="TD_47">
							</td>
							<td id="TD_48">
								
							</td>
							<td id="TD_54">
							</td>
						</tr>
						<tr id="TR_55">
							<td colspan="3" id="TD_56">
								<button type="submit" class="btn btn-primary">Submit</button>
							</td>
						</tr>
					</tbody>
				</table>
				
			</form>
</td>