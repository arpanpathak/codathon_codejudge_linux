/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package code;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.Scanner;

/**
 *
 * @author admin
 */

public class Problem2 {
    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        int t= sc.nextInt();
        long n,s;
    
    while(t>0)
    {
        s=0;
        n=sc.nextLong();
        for(int i=1;i*i<=n;i++)
        {
            if(n%i==0)
                s=s+i;
        }
        System.out.println(s+n);    
        t--;
    }
}
}