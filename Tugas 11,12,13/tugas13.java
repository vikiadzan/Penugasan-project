import java.util.Scanner;/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ASUS
 */
public class tugas13 {
    public static void main(String args[]){
        //f(5)
        System.out.println("f(5)");
        for(int i=5;i>1;i--) {           
           for(int j=5-i;j>=1;j--) {
              System.out.print(" ");
           }

           for(int j=1;j<=i;j++) {
               System.out.print("* ");
           }
           System.out.println();     
         }

        for(int i=1;i<=5;i++) {
            for(int j=1;j<=5-i;j++) {
                 System.out.print(" ");
             }
            for(int j=1;j<=i;j++) {
                System.out.print("* ");
            }
            System.out.println();
        }
         System.out.print("\n\n");
         
        //f(3)
        System.out.println("f(3)");
          for(int i=3;i>1;i--) { 
              System.out.print(" ");
           for(int j=3-i;j>=1;j--) {
              System.out.print(" ");
           }

           for(int j=1;j<=i;j++) {
               System.out.print("* ");
           }
           System.out.println();     
         }

        for(int i=1;i<=3;i++) {
            System.out.print(" ");
            for(int j=1;j<=3-i;j++) {
                 System.out.print(" ");
             }
            for(int j=1;j<=i;j++) {
                System.out.print("* ");
            }
            System.out.println();
        }
    }
}
