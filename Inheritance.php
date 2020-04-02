<?php 
	class Person
	{
		function personMath($name, $address, $mobNo)
		{
			$this->name=$name;
			$this->address=$address;
			$this->mobNo=$mobNo;
		}
	}
	
	class Customer extends Person
	{
		function setCustomerNo($customerNo)
		{
			$this->customerNo=$customerNo;
		}
		function showMeth()
		{
			echo "Customer Number: ".$this->customerNo;
			echo "<br/>";
			echo "Customer Name: ".$this->name;
			echo "<br/>";
			echo "Customer Address: ".$this->address;
			echo "<br/>";
			echo "Customer Mobile number: ".$this->mobNo;
			echo "<br/><hr>";
		}
	}
	
	$obj = new Customer;
	$obj->setCustomerNo(2058);
	$obj->personMath("Iftekhar", "Ald", "+919121****");
	$obj->showMeth();
?>