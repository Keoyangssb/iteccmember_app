$(document).ready(function() {
	var getLangSetID = $('#langID').val();
	if (getLangSetID == "2") {
		$('.mn_home').text('Dashboard');
		$('.mn_contact').text('Contact us');
		$('.mn_logout').text('Logout');
		$('.mn_loginby').text('Login by:');
		$('.mn_lang').text('Languages');
		$('.mn_LA').text('LAO');
		$('.mn_EN').text('ENG');

		$('.mn_account').text('Account');
		$('.mn_allAccount').text('All Account');
		$('.mn_staffAccount').text('Staff Account');
		$('.mn_personalAccount').text('Personal Account');
		$('.mn_enabledisable').text('Enable & Disable Account');
		$('.mn_activeAccount').text('Active Account');
		$('.mn_wallet').text('Wallet');
		$('.mn_staffWallet').text('Staff Wallet');
		$('.mn_personalWallet').text('Personal Wallet');
		$('.mn_staffTopupWallet').text('Staff Topup Wallet');
		$('.mn_staffTopupWalletDetail').text('Staff Topup Wallet Detail');
		$('.mn_staffRefundWallet').text('Staff Refund Wallet');
		$('.mn_personalTopupWallet').text('Personal Topup Wallet');
		$('.mn_personalRefundWallet').text('Personal Refund Wallet');
	

		$('.mn_report').text('Report');
		$('.mn_topupByDiary').text('Topup By Diary');
		$('.mn_paymentByDiary').text('Payment By Diary');
		$('.mn_topupByMonth').text('Topup By Month');
		$('.mn_paymentByMonth').text('Payment By Month');
		$('.mn_balanceByMonth').text('Balance By Month');

	

		
	} else {		
		
		$('.mn_home').text('ໜ້າຫຼັກ');
		$('.mn_contact').text('ຕິດຕໍ່ເຮົາ');
		$('.mn_logout').text('ອອກລະບົບ');
		$('.mn_loginby').text('ເຂົ້າລະບົບໂດຍ:');
		$('.mn_lang').text('ພາສາ');
		$('.mn_LA').text('ລາວ');
		$('.mn_EN').text('ອັງກິດ');

		$('.mn_master').text('ຈັດການຂໍ້ມູນ');
		$('.mn_masterBu').text('ຫົວໜ່ວຍທຸລະກິດ');
		$('.mn_masterBuCodeName').text('ຫົວໜ່ວຍທຸລະກິດ Code | Name');
		$('.mn_masterDept').text('ພະແນກ');
		$('.mn_masterDeptCodeName').text('ພະແນກ Code | Name');

		$('.mn_account').text('ບັນຊີ');
		$('.mn_allAccount').text('ບັນຊີທັງໝົດ');
		$('.mn_staffAccount').text('ບັນຊີພະນັກງານ');
		$('.mn_personalAccount').text('ບັນຊີທົ່ວໄປ');
		$('.mn_enabledisable').text('ເປີດນຳໃຊ້ & ປິດນຳໃຊ້ ບັນຊີ');
		$('.mn_activeAccount').text('ບັນຊີ ເປີດນໍາໃຊ້ແລ້ວ');
		$('.mn_wallet').text('ກະເປົາເງິນ');
		$('.mn_staffWallet').text('ກະເປົາເງິນພະນັກງານ');
		$('.mn_personalWallet').text('ກະເປົາເງິນທົ່ວໄປ');
		$('.mn_staffTopupWallet').text('ຕື່ມເງິນ');
		$('.mn_staffTopupWalletDetail').text('ລາຍລະອຽດການຕື່ມເງິນ');
		$('.mn_staffRefundWallet').text('ສົ່ງຄືນເງິນ');
		$('.mn_staffTopupRefundWallet').text('ຕື່ມເງິນ & ສົ່ງຄືນເງິນ');
		$('.mn_personalTopupWallet').text('ຕື່ມເງິນ');
		$('.mn_personalRefundWallet').text('ສົ່ງຄືນເງິນ');
	

		$('.mn_report').text('ລາຍງານ');
		$('.mn_topupByDiary').text('ຕື່ມເງິນປະຈຳວັນ');
		$('.mn_paymentByDiary').text('ຈ່າຍເງິນປະຈຳວັນ');
		$('.mn_topupByMonth').text('ຕື່ມເງິນປະຈຳເດືອນ');
		$('.mn_paymentByMonth').text('ຈ່າຍເງິນປະຈຳເດືອນ');
		$('.mn_balanceByMonth').text('ຈຳນວນເງິນປະຈຳເດືອນ');
		$('.mn_paymentByMonthAll').text('ຈ່າຍເງິນປະຈຳເດືອນ (ລວມ)');
		$('.mn_report_finance').text('ລາຍງານ-ສຳລັບການເງິນ');
		$('.mn_payment_staff').text('ການຈ່າຍ-ເງິນນະໂຍບາຍ');


		$('.id').text('ລະຫັດ');
		$('.no').text('ລຳດັບ');
		$('.staffId').text('ລະຫັດພະນັກງານ');
		$('.accountName').text('ຊື່ບັນຊີ');
		$('.mobileNumber').text('ເບີໂທ');
		$('.fullName').text('ຊື່ ແລະ ນາມສະກຸນ');
		$('.dob').text('ວັນເດືອນປີເກີດ');
		$('.gender').text('ເພດ');
		$('.email').text('ອີເມລ');
		$('.address').text('ທີ່ຢູ່');
		$('.infoComplete').text('ລົງທະບຽນ');	
		$('.staffWalletBalance').text('ຈຳນວນເງິນໃນກະເປົາພະນັກງານ');	
		$('.personalWalletBalance').text('ຈຳນວນເງິນໃນກະເປົາທົ່ວໄປ');	
		
		$('.fromDate').text('ຕັ້ງແຕ່ວັນທີ');
		$('.toDate').text('ຫາວັນທີ');
		$('.more').text('ເພີ່ມເຕີມ');
		$('.details').text('ລາຍລະອຽດ');
		$('.description').text('ຄຳອະທິບາຍ');
		$('.shopName').text('ຊື່ຮ້ານ');
		$('.amount').text('ຈຳນວນເງິນ');
		$('.inputForTopup').text('ປ້ອນເບີໂທລະສັບເພື່ອຕື່ມເງິນ');
		$('.topup').text('ຕື່ມເງິນ');
		$('.topupDate').text('ວັນທີຕື່ມເງິນ');
		$('.totalTopup').text('ຈຳນວນຕື່ມເງິນ');
		$('.paymentDate').text('ວັນທີຈ່າຍເງິນ');
		$('.totalPayment').text('ຈຳນວນຈ່າຍເງິນ');
		$('.totalBalance').text('ຈຳນວນເງິນທັງໝົດ');
		$('.total').text('ຈຳນວນເງິນຄົງເຫຼືອ');
		$('.refund').text('ສົ່ງຄືນເງິນ');
		$('.enable').text('ເປີດນຳໃຊ້');
		$('.disable').text('ປິດນຳໃຊ້');
		$('.monthYear').text('ເດືອນ & ປີ');
		$('.month').text('ເດືອນ');
		$('.year').text('ປີ');


	}

});