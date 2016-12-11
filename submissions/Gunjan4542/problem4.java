/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.io.BufferedReader;
import java.io.InputStreamReader;

/**
 *
 * @author tcstcs
 */
public class problem4 {
    static BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    public static void main(String[]args)throws Exception{
        int t;
        while((t=(int)getInt())!=0){
            String s=br.readLine();
            int len=s.length();
            char arr[][]=new char[len/t][t];
            int pos=0;
            for(int i=0;i<len/t;i++){
                if(((i+1)%2)==0){
                    for(int j=t-1;j>=0;j--){
                        arr[i][j]=s.charAt(pos);
                    pos++;
                    }
                
                }
                else{
                for(int j=0;j<t;j++){
                   arr[i][j]=s.charAt(pos);
                   pos++;
                }
                }
            }
            //printArr(arr,len/t, t);
            for(int i=0;i<t;i++){
                for(int j=0;j<len/t;j++){
                    System.out.print(arr[j][i]);
                }
               
            }
            System.out.println();
            
            
        }
       
    }
    static void printArr(char arr[][],int r,int c){
        for(int i=0;i<r;i++){
            for(int j=0;j<c;j++){
                System.out.print(arr[i][j]);
            }
            System.out.println();
        }
        System.out.println();
    }
    static void back(char arr[][],String s,int pos,int r,int c){
        for(int i=c-1;i>=0;i-- ){
            arr[r][i]=s.charAt(pos+((c-1)-i));
            
        }
        
    }
 
    static long getInt()throws Exception{
        long t=Long.parseLong(br.readLine());
        return  t;
    }
    static int [] geIntArr()throws Exception{
        String s[]=br.readLine().split(" ");
        int arr[]=new int[s.length];
        for(int i=0;i<s.length;i++){
            arr[i]=Integer.parseInt(s[i]);
        }
        return arr;
    }
     static int [] getIntArr()throws Exception{
        String s[]=br.readLine().split(" ");
        int arr[]=new int[s.length];
        for(int i=0;i<s.length;i++){
            arr[i]=Integer.parseInt(s[i]);
        }
        return arr;
    }
     static long [] getLongArr()throws Exception{
        String s[]=br.readLine().split(" ");
        long arr[]=new long[s.length];
        for(int i=0;i<s.length;i++){
            arr[i]=Long.parseLong(br.readLine());
        }
        return arr;
    }
    
}
