<?php
require_once '../controller/view_agreement.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <style type="text/css">
		td{
			padding:2px;
			}
		p{
			padding:3px;
			}
	</style>
    <link rel="stylesheet" href="../../common/CSS/print.css"
type="text/css" media="print" />
</head>

<body  bgcolor="#E1E1FF">
	<div class="print" style="background-color:#000089; height:3%; padding:3px; ">
		<h1 style="color:#FFFFFF" align="center">Green Valley Property Development (PVT) Ltd.</h1></div>
	<hr/>
	
<div class="content" style="padding-top:0px; background-color:#FCFCFC" >
<div class="print">
	<form name="frm_agreement" action="../controller/agreement_info.php" method="post">
    	<table align="center" style="padding:5px;" width="600px">
        	<tr>
            	<td colspan="2"><b> Prior Registration:
                <?php echo '' . $agreement['reg_no']; ?></b></td>
            </tr>
            <tr>
            	<td colspan="2"><b><?php echo '' .$agreement['l_name'] ; ?></b></td>
            </tr>
            <tr>
            	<td colspan="2"><?php echo '' .$agreement['l_address'] ; ?></td>
            </tr>
            <tr>
            	<td colspan="2"><?php echo '' .$agreement['l_tel'] ; ?></td>
            </tr>
            <tr>
            	<td colspan="2">&nbsp;</td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><u><strong>AGREEMENT TO SELL ON BEHALF OF OWNER NO.<?php echo ''.$agreement['agreement_no'] ; ?></strong></u></td>
            </tr>
            <tr>
            	<td colspan="2">
                	<p id="demo">
                    	THIS AGREEMENT IS MADE AND ENTERED INTO AT 
                	      <?php echo '' .$agreement['location']; ?> on this
                	      <?php echo '' .$agreement['date'] ; ?> by and between 
                	      <?php echo '' .$agreement['full_name'] ; ?> (hereinafter referred to as Seller) (I.D No <?php echo '' .$agreement['NIC'] ; ?> )
                	      <?php echo '' .$agreement['address'] ; ?> and <u>Green Valley finance &amp; Property Investment (Pvt) Ltd.</u> ,a Company duly incorporated under the Companies Act No 17 of 1982 and having its registered office at  <b>No.77,Doranegama road, Medawala.(H.P)</b> (hereinafter referred to as the <b>Company</b> )
                	</p>
                </td>
            </tr>
            
            
            <tr>
            	<td colspan="2">
                	<p>
                	The Seller is the owner and the proprietor of the Company is engaged as the Seller’s agent for the sale of property described in the Schedule hereto.
The Seller has agreed with the Company to have his property sold subject to the following terms and conditions.
					</p>
                </td>
            <tr>
            	<td colspan="2">
                	<p>
                    	1.	The property shall be sold at aggregate price of sum of Rupees <?php echo '' .$agreement['agreed_price'] ; ?>  as agreed by the Seller, either in one unit or in defined block in such a manner that the Company think fit and expedient. </p>
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                	<p>
                    	2.	The sale shall be completed within <?php echo '' .$agreement['valid_period'] ; ?> from date hereof or such extended period agreed by the parties.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	3.	The Company reserves the right to pay all monies collected by the Company to the Seller after the Seller signs the Deed of Transfer in favour of the purchaserrs.
                    </p>	
                </td>
            </tr>
           <tr>
            <td colspan="2">
                	<p>
                    	4.	The sales expenses appearing in clause(5) will be born by the Company,and will be recovered from the sale proceeds as sale expenses.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	5.	Statement of approximate expenditure.</p>	
                </td>
            </tr>
            <tr>
           	  <td width="208">(a) Survey fees :</td>
           	  <td width="373">Rs. <?php echo '' .$agreement['survey'] ; ?></td>
            </tr>
            <tr>
            	<td>(b) Advertising expenses :</td>
            	<td>Rs. <?php echo '' .$agreement['advertising'] ; ?></td>
            </tr>
            <tr>
            	<td>(c) Development expenses </td>
            	<td>Rs. <?php echo '' .$agreement['development'] ; ?></td>
            </tr>
            <tr>
            	<td>(d) Other expenses :</td>
            	<td>Rs. <?php echo '' .$agreement['other'] ; ?></td>
            </tr>
            <tr>
            	<td>(e) Electricity :</td>
            	<td><u>Rs. <?php echo '' .$agreement['electricity'] ; ?></u></td>
            </tr>
            <tr>
            	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total :</td>
            	<td><u>Rs. <?php echo '' .$agreement['total'] ; ?></u></td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	6.	The Seller shall arrange to give valid title to the purchaser /s or his or their nominees and also the customary covenants of the Purchaser and also hand over vacant possession of the premises.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	7.	Upon signing of this Agreement the Seller permits the Company to enter upon said premises and attend to all necessary and reasonable matters in the preparations of the property for such sale.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	8.	The Seller shall not be entitled to a refund of whatever monies paid towards the item of expenditure if the Seller withdraws or stays or refuses to confirm the sale at any stage after signing this agreement.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	9.	Any trifling error or omission which may appear to have been made by the Company or any loss or damage which may happen to the property by any unforeseen circumstances shall not be vacate this Agreement.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	10.	The title of the property if not acceptable to the lending instructions Title Insurance must be obtained by the owner.
                    </p>	
                </td>
            </tr>
           <tr>
            <td colspan="2">
                	<p>
                    	11.	The owner will consent the Company to put up banners, hand bills, Paper advertisements van advertising and radio/T.V.
                    </p>	
                </td>
            </tr>
            <tr>
            <td colspan="2">
                	<p>
                    	12.	Upon signing this agreement the Seller shall be permit the Company to clear, survey, demarcate, develop the land and to construct culverts and to draw electricity lines as per requirements of Local Authority.
                    </p>	
                </td>
            </tr>
             <tr>
            <td colspan="2">
                	<p>
                    	13.	The sale tax and any other charges (if any) payable to the local authority should be born by the owner.
                    </p>	
                </td>
            </tr>
            
            
            
            <tr>
            	<td colspan="2"><strong>THE SCHEDULE ABOVE REFFRRED TO</strong></td>
            </tr>
            <tr>
            	<td colspan="2"> <?php echo '' .$agreement['description'] ; ?></td>
            </tr>
            <tr>
            	<td colspan="2">
                	<p><div style="width:200px">
                    	Signed in the presence of us and we do here by declare that we are well acquainted with the executants and know their proper names occupations and residences…………
                        </div>
                    </p>	
                </td>
                <td width="3">&nbsp;</td>
            </tr>
             <tr>
            	<td colspan="2"><p>1.<?php echo '' .$agreement['witness1'] ; ?></p><p> 2.<?php echo '' .$agreement['witness2'] ; ?></p></td>
            	<td>&nbsp;</td>
            </tr>
            <tr>
            	<td>&nbsp;</td>
            	<td align="right">Notary Public.</td>
            </tr>
            
        </table>
	</form>
    </div>
</div>
<div align="center"><input type="button" value=" Print this page "
onclick="window.print();return false;" /></div>
</body>
</html>
