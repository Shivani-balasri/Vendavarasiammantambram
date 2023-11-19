from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        name = request.form['name']
        phone = request.form['phone']
        address = request.form['address']
        city = request.form['city']
        pincode = request.form['pincode']
        nature_of_payment = request.form['nature_of_payment']
        amount = request.form['amount']
        other_details = request.form['other_details']

        return render_template('display_data.html', 
                               name=name, 
                               phone=phone, 
                               address=address, 
                               city=city, 
                               pincode=pincode, 
                               nature_of_payment=nature_of_payment, 
                               amount=amount, 
                               other_details=other_details)

    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)
