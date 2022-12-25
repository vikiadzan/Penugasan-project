
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ASUS
 */
public class tugas11 {
    public static void main(String args[]){
            
    Scanner in = new Scanner(System.in);

        int i, height, j, k;

        System.out.print("masukan tinggi segitiga: ");
        height = in.nextInt();

        System.out.println("\nBentuk segitaga:\n\n");

        for(i = 1; i <= height - 1; i++) {
            System.out.print("\t");
            for(j = 1; j <= i; j++)
                System.out.print(j);
            for(k = 1; k <= 2 * (height - i); k++)
                System.out.print(" ");
            System.out.print('\b');
            for(j = i; j >= 1; j--)
                System.out.print(j);
            System.out.print('\n');
        }

        for(i = height; i >= 1; i--) {
            System.out.print("\t");
            for(j = 1; j <= i; j++)
                System.out.print(j);
            for(k = 1; k <= 2 * (height - i); k++)
                System.out.print(" ");
            System.out.print('\b');
            for(j = i; j >= 1; j--)
                System.out.print(j);
            System.out.print('\n');
        }
    }
}
