// N-Bishops -> Hard
import java.io.*;
import java.util.*;

public class problem5 {
    //static int board[];
    static int r, c, count;
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int t = in.nextInt();
        while(t-- > 0) {
            r = in.nextInt();
            c = in.nextInt();
            count = 0;
            int[] board = new int[r];
            placeBishop(0, board);
            System.out.println(count);
        }
    }
    public static boolean isSafe(int col, int Bi, int[] board) {
        for(int i = 0; i < Bi; i++) {
            if (Math.abs(board[i] - col) == Math.abs(i - Bi)) {
                return false;
            }
        }
        return true;
    }
    public static void placeBishop(int Bi, int[] board) {
        if(Bi == r) {
            //System.out.println(Arrays.toString(board));
            //display(board);
            count++;
        } 
        else {
            for(int col = 0; col < c; col++) {
                if(isSafe(col, Bi, board)) {
                    board[Bi] = col;
                    placeBishop(Bi + 1, board);
                    board[Bi] = -1;
                }
            }
        }
    }
    /*
    public static void display(int[] board)
    {
        for(int i=0; i < r; i++)
        {
            for(int j=0; j < c; j++)
            {
                if(board[i] == j)
                    System.out.print("B ");
                else
                    System.out.print("X ");
            }
            System.out.println();
        }
        System.out.println();
    }
    */
}