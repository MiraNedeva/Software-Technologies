package com.softuni.controller.models;

public class Calculator {
    private  double leftOperand;
    private String operator;
    private  double rightOperand;

    public Calculator(double leftOperand, String operator, double rightOperand) {
        this.leftOperand = leftOperand;
        this.operator = operator;
        this.rightOperand = rightOperand;
    }

    public void setLeftOperand(double leftOperand) {
        this.leftOperand = leftOperand;
    }

    public void setOperator(String operator) {
        this.operator = operator;
    }

    public void setRightOperand(double rightOperand) {
        this.rightOperand = rightOperand;
    }

    public double getLeftOperand() {
        return leftOperand;
    }

    public String getOperator() {
        return operator;
    }

    public double getRightOperand() {
        return rightOperand;
    }

    public double calculateResult(){
        double result = 0;

        switch (this.operator){
            case"+":
                result = this.leftOperand + this.rightOperand;
                break;
            case"-":
                result = this.leftOperand - this.rightOperand;
                break;
            case "*":
                result = this.leftOperand * this.rightOperand;
                break;
            case "/":
                result = this.leftOperand / this.rightOperand;
                break;
            case"^":
                result = Math.pow(leftOperand, rightOperand);
                break;
            default: result = 0;
            break;
        }

        return  result;
    }
}
