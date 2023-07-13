class formvalidation
{
    formValues ={
    	FirstName: "",
    	LastName : "",
    	NICNumber : "",
    	PhoneNumber : "",
    	Email : "",
    }

    errorValues ={
    	FirstNameErr : "",
    	LastNameErr : "",
    	NICNumberErr : "",
    	PhoneNumberErr : "",
    	EmailErr : "",
    }

    showErrorMsg(index,msg)
    {
        const form = document.getElementsByClassName('form')[index]
        form.classList.add('error')
        form.getElementsByTagName('span')[0].textContent = msg
    }

    showSuccessMsg(index)
    {
        const form = document.getElementsByClassName('form')[index]
        form.classList.remove('error')
        form.classList.add('success')
    }

    getInputs()
    {
        this.formValues.FirstName = document.getElementsByClassName('FirstName').value.trim()
        this.formValues.LastName = document.getElementsByClassName('LastName').value.trim()
        this.formValues.NICNumber = document.getElementsByClassName('NICNumber').value.trim()
        this.formValues.PhoneNumber = document.getElementsByClassName('PhoneNumber').value.trim()
        this.formValues.Email = document.getElementsByClassName('Email').value.trim()
    }

    validateFirstName()
    {
        if(this.formValues.FirstName=== "")
        {
        	this.errorValues.FirstNameErr = "*Please Enter Your First Name!"
        	this.showErrorMsg(0,errorValues.FirstNameErr)
        }
        else
        {
        	this.errorValues.FirstNameErr = ""
        	this.showSuccessMsg(0)
        }
    }

    validateLastName()
    {
    	if(this.formValues.LastName=== "")
        {
        	this.errorValues.LastNameErr = "*Please Enter Your Last Name!"
        	this.showErrorMsg(1,errorValues.LastNameErr)
        }
        else
        {
        	this.errorValues.LastNameErr = ""
        	this.showSuccessMsg(1)
        }

    }

    validateNICNumber()
    {
    	const NICNumber = /^\d{10}(V)$/
    	const NICNumber = /^\d{12}$/

    	if(this.formValues.NICNumber === "")
    	{
    		this.errorValues.NICNumberErr = "*Please Enter Valid NIC Number!"
    		this.showErrorMsg(2,this.errorValues.NICNumberErr)
    	}

    	else if(NICNumber.test(this.formValues.NICNumber))
    	{
    		this.errorValues.NICNumberErr = ""
    		this.showSuccessMsg(2)
    	}

    	else
    	{
    		this.errorValues.NICNumberErr = "*Invalid NIC Number!"
    		this.showErrorMsg(2,this.errorValues.NICNumberErr)
    	}

    }

    validatePhoneNumber()
    {
    	const PhoneNumber = /^\d{10}$/

    	if(this.formValues.PhoneNumber === "")
    	{
    		this.errorValues.PhoneNumberErr = "*Please Enter Valid Phone Number!"
    		this.showErrorMsg(3,this.errorValues.PhoneNumberErr)
    	}

    	else if(PhoneNumber.test(this.formValues.PhoneNumber))
    	{
    		this.errorValues.PhoneNumberErr = ""
    		this.showSuccessMsg(3)
    	}

    	else
    	{
    		this.errorValues.PhoneNumberErr = "*Invalid Phone Number!"
    		this.showErrorMsg(3,this.errorValues.PhoneNumberErr)
    	}
    }

    validateEmail()
    {
        const regExp = /^([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9]+)\.([a-zA-Z]{2,10})(\.[a-zA-Z]{2,8})?$/

        if(this.formValues.Email === "")
        {
        	this.errorValues.EmailErr = "*Please Enter Valid Email!"
        	this.showErrorMsg(4,this.errorValues.EmailErr)
        }
        else if(!(regExp.test(this.formValues.Email)))
        {
        	this.showErrorMsg.EmailErr = "*Invalid Email!"
        	this.showErrorMsg(4,errorValues.EmailErr)

        }
        else
        {
        	this.errorValues.EmailErr = ""
            this.showSuccessMsg(4)
        }
    }

}

const validateUserInputs = new formvalidation ()

document.getElementsByClassName('form')[0].addEventListener('submit' ,event => 
  {
  	event.preventDefault()
  	validateUserInputs.getInputs()
  	validateUserInputs.validateFirstName()
  	validateUserInputs.validateEmail()
  	validateUserInputs.validatePhoneNumber()

  })
	

