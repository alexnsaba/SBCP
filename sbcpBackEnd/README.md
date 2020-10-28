
# Breast Cancer Classification



<p align="center">

<img src='flask-app/sample.png'>

</p>


# Introduction
This is the Backend for the Smart Breast Cancer Predictor 

We use Keras, an easy-to-use deep learning framework which builds on top of tensorflow to build and train the model.

# The SBCP(Smart Breast Cancer Predictor) 
The link to the SBCP model is 

# How to use

We got an accuracy of 86% after finishing the training process. If you need a higer accuracy, you could adjust the network achitectures and training parameters. Required dependencies: *tensorflow*, *keras*, *numpy* and *python*. 

After finishing the training process, put the model (*****_sbcp.h5_*****) in *****_static_***** folder of Flask app and run the following commands to start the app:å

    export FLASK_APP=app.py
    python -m flask run


Using any web browser to access:  http://127.0.0.1:5000/
